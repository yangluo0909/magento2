<?php
namespace Magento\ScheduledImportExport\Controller\Adminhtml\Scheduled\Operation\Save;

/**
 * Interceptor class for @see \Magento\ScheduledImportExport\Controller\Adminhtml\Scheduled\Operation\Save
 */
class Interceptor extends \Magento\ScheduledImportExport\Controller\Adminhtml\Scheduled\Operation\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\ScheduledImportExport\Model\Scheduled\OperationFactory $operationFactory, \Magento\ScheduledImportExport\Helper\Data $dataHelper, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $operationFactory, $dataHelper, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
