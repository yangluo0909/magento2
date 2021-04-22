<?php
namespace Magento\GiftRegistry\Block\View;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Block\View
 */
class Interceptor extends \Magento\GiftRegistry\Block\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \Magento\GiftRegistry\Model\ItemFactory $itemFactory, \Magento\Directory\Model\CountryFactory $countryFactory, \Magento\GiftRegistry\Model\TypeFactory $typeFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $pricingHelper, $itemFactory, $countryFactory, $typeFactory, $data);
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
