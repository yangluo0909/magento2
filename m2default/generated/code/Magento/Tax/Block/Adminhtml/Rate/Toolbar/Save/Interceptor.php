<?php
namespace Magento\Tax\Block\Adminhtml\Rate\Toolbar\Save;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rate\Toolbar\Save
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rate\Toolbar\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Block\Widget\Button\ButtonList $buttonList, \Magento\Backend\Block\Widget\Button\ToolbarInterface $toolbar, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $buttonList, $toolbar, $data);
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
