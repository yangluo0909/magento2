<?php
namespace Magento\GiftCard\Block\Adminhtml\Catalog\Product\Composite\Fieldset\Giftcard;

/**
 * Interceptor class for @see \Magento\GiftCard\Block\Adminhtml\Catalog\Product\Composite\Fieldset\Giftcard
 */
class Interceptor extends \Magento\GiftCard\Block\Adminhtml\Catalog\Product\Composite\Fieldset\Giftcard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, array $data = [], ?\Magento\Catalog\Helper\Product $productHelper = null, ?\Magento\Framework\Pricing\Helper\Data $pricingHelper = null)
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $customerSession, $priceCurrency, $data, $productHelper, $pricingHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
