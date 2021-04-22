<?php
namespace Magento\CatalogRule\Block\Adminhtml\Edit\GenericButton;

/**
 * Interceptor class for @see \Magento\CatalogRule\Block\Adminhtml\Edit\GenericButton
 */
class Interceptor extends \Magento\CatalogRule\Block\Adminhtml\Edit\GenericButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $registry);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($name);
    }
}
