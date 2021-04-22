<?php
namespace Magento\AdvancedCheckout\Controller\Cart\RemoveFailed;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Controller\Cart\RemoveFailed
 */
class Interceptor extends \Magento\AdvancedCheckout\Controller\Cart\RemoveFailed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Url\DecoderInterface $urlDecoder)
    {
        $this->___init();
        parent::__construct($context, $urlDecoder);
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
