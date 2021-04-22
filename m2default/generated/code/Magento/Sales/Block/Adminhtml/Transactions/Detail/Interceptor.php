<?php
namespace Magento\Sales\Block\Adminhtml\Transactions\Detail;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Transactions\Detail
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Transactions\Detail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, \Magento\Sales\Api\OrderPaymentRepositoryInterface $orderPaymentRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $adminHelper, $orderPaymentRepository, $data);
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
