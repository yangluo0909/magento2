<?php
namespace Magento\CustomerCustomAttributes\Controller\Adminhtml\Customer\Formtype\Delete;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Controller\Adminhtml\Customer\Formtype\Delete
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Controller\Adminhtml\Customer\Formtype\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Eav\Model\Form\TypeFactory $formTypeFactory, \Magento\Eav\Model\Form\FieldsetFactory $fieldsetFactory, \Magento\Eav\Model\ResourceModel\Form\Fieldset\CollectionFactory $fieldsetsFactory, \Magento\Eav\Model\ResourceModel\Form\Element\CollectionFactory $elementsFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $formTypeFactory, $fieldsetFactory, $fieldsetsFactory, $elementsFactory);
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
