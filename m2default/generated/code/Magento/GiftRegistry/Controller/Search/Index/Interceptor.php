<?php
namespace Magento\GiftRegistry\Controller\Search\Index;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Controller\Search\Index
 */
class Interceptor extends \Magento\GiftRegistry\Controller\Search\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Locale\ResolverInterface $localeResolver)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $localeDate, $storeManager, $localeResolver);
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
