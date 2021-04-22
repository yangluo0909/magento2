<?php
namespace Magento\CatalogEvent\Controller\Adminhtml\Catalog\Event\Delete;

/**
 * Interceptor class for @see \Magento\CatalogEvent\Controller\Adminhtml\Catalog\Event\Delete
 */
class Interceptor extends \Magento\CatalogEvent\Controller\Adminhtml\Catalog\Event\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\CatalogEvent\Model\EventFactory $eventFactory, \Magento\Framework\Stdlib\DateTime\Filter\DateTime $dateTimeFilter, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $eventFactory, $dateTimeFilter, $storeManager);
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
