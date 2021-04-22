<?php
namespace Magento\Invitation\Controller\Customer\Account\Create;

/**
 * Interceptor class for @see \Magento\Invitation\Controller\Customer\Account\Create
 */
class Interceptor extends \Magento\Invitation\Controller\Customer\Account\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Customer\Model\Registration $registration, \Magento\Invitation\Model\InvitationProvider $invitationProvider)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $resultPageFactory, $registration, $invitationProvider);
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
