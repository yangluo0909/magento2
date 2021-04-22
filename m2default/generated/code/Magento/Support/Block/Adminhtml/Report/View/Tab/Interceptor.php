<?php
namespace Magento\Support\Block\Adminhtml\Report\View\Tab;

/**
 * Interceptor class for @see \Magento\Support\Block\Adminhtml\Report\View\Tab
 */
class Interceptor extends \Magento\Support\Block\Adminhtml\Report\View\Tab implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Support\Model\Report\DataConverter $dataConverter, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $dataConverter, $data);
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
