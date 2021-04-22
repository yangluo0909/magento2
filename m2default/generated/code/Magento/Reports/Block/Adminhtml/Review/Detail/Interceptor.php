<?php
namespace Magento\Reports\Block\Adminhtml\Review\Detail;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Review\Detail
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Review\Detail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Catalog\Model\ProductFactory $productFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productFactory, $data);
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
