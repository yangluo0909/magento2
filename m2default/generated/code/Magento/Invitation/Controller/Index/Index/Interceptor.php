<?php
namespace Magento\Invitation\Controller\Index\Index;

/**
 * Interceptor class for @see \Magento\Invitation\Controller\Index\Index
 */
class Interceptor extends \Magento\Invitation\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $session, \Magento\Invitation\Model\Config $config, \Magento\Invitation\Model\InvitationFactory $invitationFactory)
    {
        $this->___init();
        parent::__construct($context, $session, $config, $invitationFactory);
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
