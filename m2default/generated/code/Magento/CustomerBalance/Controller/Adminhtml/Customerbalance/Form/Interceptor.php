<?php
namespace Magento\CustomerBalance\Controller\Adminhtml\Customerbalance\Form;

/**
 * Interceptor class for @see \Magento\CustomerBalance\Controller\Adminhtml\Customerbalance\Form
 */
class Interceptor extends \Magento\CustomerBalance\Controller\Adminhtml\Customerbalance\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\CustomerBalance\Model\Balance $balance, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\Registry $coreRegistry)
    {
        $this->___init();
        parent::__construct($context, $balance, $customerFactory, $coreRegistry);
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
