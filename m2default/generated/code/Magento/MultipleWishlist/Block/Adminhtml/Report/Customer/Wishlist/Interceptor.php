<?php
namespace Magento\MultipleWishlist\Block\Adminhtml\Report\Customer\Wishlist;

/**
 * Interceptor class for @see \Magento\MultipleWishlist\Block\Adminhtml\Report\Customer\Wishlist
 */
class Interceptor extends \Magento\MultipleWishlist\Block\Adminhtml\Report\Customer\Wishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
