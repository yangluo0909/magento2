<?php
namespace Magento\MultipleWishlist\Block\Info;

/**
 * Interceptor class for @see \Magento\MultipleWishlist\Block\Info
 */
class Interceptor extends \Magento\MultipleWishlist\Block\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\CustomerFactory $customerFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $httpContext, $customerSession, $customerFactory, $data);
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
