<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AdvancedCheckout\Controller\Cart;

use Magento\AdvancedCheckout\Controller\Cart;
use Magento\AdvancedCheckout\Helper\Data;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Stdlib\Cookie\CookieMetadataFactory;
use Magento\Framework\Stdlib\Cookie\PublicCookieMetadata;
use Magento\Framework\Stdlib\CookieManagerInterface;

/**
 * Entity for advanced add to cart
 */
class AdvancedAdd extends Cart implements HttpPostActionInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    private $criteriaBuilder;

    /**
     * @var CookieManagerInterface
     */
    private $cookieManager;

    /**
     * @var CookieMetadataFactory
     */
    private $cookieMetadataFactory;

    /**
     * @param Context $context
     * @param ProductRepositoryInterface|null $productRepository
     * @param SearchCriteriaBuilder|null $criteriaBuilder
     * @param CookieManagerInterface|null $cookieManager
     * @param CookieMetadataFactory|null $cookieMetadataFactory
     */
    public function __construct(
        Context $context,
        ?ProductRepositoryInterface $productRepository = null,
        ?SearchCriteriaBuilder $criteriaBuilder = null,
        ?CookieManagerInterface $cookieManager = null,
        ?CookieMetadataFactory $cookieMetadataFactory = null
    ) {
        parent::__construct($context);
        $this->productRepository = $productRepository ?: $this->_objectManager->get(ProductRepositoryInterface::class);
        $this->criteriaBuilder = $criteriaBuilder ?: $this->_objectManager->get(SearchCriteriaBuilder::class);
        $this->cookieManager = $cookieManager ?: $this->_objectManager->get(CookieManagerInterface::class);
        $this->cookieMetadataFactory = $cookieMetadataFactory ?:
            $this->_objectManager->get(CookieMetadataFactory::class);
    }

    /**
     * Add to cart products, which SKU specified in request
     *
     * @return Redirect
     * @throws LocalizedException
     */
    public function execute()
    {
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        // check empty data
        /** @var $helper Data */
        $helper = $this->_objectManager->get(Data::class);
        $items = $this->getRequest()->getParam('items');
        foreach ($items as $k => $item) {
            if (!isset($item['sku']) || (empty($item['sku']) && $item['sku'] !== '0')) {
                unset($items[$k]);
            }
        }
        if (empty($items) && !$helper->isSkuFileUploaded($this->getRequest())) {
            $this->messageManager->addError($helper->getSkuEmptyDataMessageText());
            return $resultRedirect->setPath('checkout/cart');
        }

        try {
            // perform data
            $cart = $this->_getFailedItemsCart()->prepareAddProductsBySku($items)->saveAffectedProducts();

            $this->setCartCookieByItems($items);

            $this->messageManager->addMessages($cart->getMessages());

            if ($cart->hasErrorMessage()) {
                throw new LocalizedException(__($cart->getErrorMessage()));
            }
        } catch (LocalizedException $e) {
            $this->messageManager->addException($e, $e->getMessage());
        }
        $this->_eventManager->dispatch('collect_totals_failed_items');

        return $resultRedirect->setPath('checkout/cart');
    }

    /**
     * Set cookie for add to cart
     *
     * @param array $items
     * @return void
     */
    private function setCartCookieByItems(array $items): void
    {
        $productsToAdd = $productsBySku = [];
        $failedSkus = $this->_getFailedItemsCart()->getAffectedItems();
        $skusToLoad = array_diff(array_values(array_filter(array_column($items, 'sku'))), array_keys($failedSkus));
        $loaded = $this->productRepository->getList(
            $this->criteriaBuilder->addFilter('sku', $skusToLoad, 'in')->create()
        );
        foreach ($loaded->getItems() as $product) {
            $productsBySku[$product->getSku()] = $product;
        }

        foreach ($items as $item) {
            if (!array_key_exists($item['sku'], $productsBySku) ||
                !array_key_exists('qty', $item) ||
                empty($item['qty'])
            ) {
                continue;
            }
            $productsToAdd[] = [
                'sku' => $item['sku'],
                'name' => $productsBySku[$item['sku']]->getName(),
                'price' => $productsBySku[$item['sku']]->getFinalPrice(),
                'qty' => $item['qty'],
            ];
        }

        if (empty($productsToAdd)) {
            return;
        }

        /** @var PublicCookieMetadata $publicCookieMetadata */
        $publicCookieMetadata = $this->cookieMetadataFactory->createPublicCookieMetadata()
            ->setDuration(3600)
            ->setPath('/')
            ->setHttpOnly(false);

        $this->cookieManager->setPublicCookie(
            'add_to_cart',
            \rawurlencode(\json_encode($productsToAdd)),
            $publicCookieMetadata
        );
    }
}
