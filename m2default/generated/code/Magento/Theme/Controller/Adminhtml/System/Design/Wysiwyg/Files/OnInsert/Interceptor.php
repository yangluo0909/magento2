<?php
namespace Magento\Theme\Controller\Adminhtml\System\Design\Wysiwyg\Files\OnInsert;

/**
 * Interceptor class for @see \Magento\Theme\Controller\Adminhtml\System\Design\Wysiwyg\Files\OnInsert
 */
class Interceptor extends \Magento\Theme\Controller\Adminhtml\System\Design\Wysiwyg\Files\OnInsert implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Theme\Helper\Storage $storage)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $storage);
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
