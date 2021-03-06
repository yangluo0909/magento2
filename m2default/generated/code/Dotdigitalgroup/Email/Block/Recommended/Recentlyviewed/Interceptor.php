<?php
namespace Dotdigitalgroup\Email\Block\Recommended\Recentlyviewed;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Block\Recommended\Recentlyviewed
 */
class Interceptor extends \Dotdigitalgroup\Email\Block\Recommended\Recentlyviewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Dotdigitalgroup\Email\Block\Helper\Font $font, \Dotdigitalgroup\Email\Model\Catalog\UrlFinder $urlFinder, \Dotdigitalgroup\Email\Model\ResourceModel\Catalog $catalog, \Magento\Customer\Model\SessionFactory $sessionFactory, \Dotdigitalgroup\Email\Helper\Data $helper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \Dotdigitalgroup\Email\Helper\Recommended $recommended, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $font, $urlFinder, $catalog, $sessionFactory, $helper, $priceHelper, $recommended, $data);
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
