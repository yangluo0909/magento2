<?php
namespace Magento\Reminder\Controller\Adminhtml\Reminder\Edit;

/**
 * Interceptor class for @see \Magento\Reminder\Controller\Adminhtml\Reminder\Edit
 */
class Interceptor extends \Magento\Reminder\Controller\Adminhtml\Reminder\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Reminder\Model\RuleFactory $ruleFactory, \Magento\Reminder\Model\Rule\ConditionFactory $conditionFactory, \Magento\Framework\Stdlib\DateTime\Filter\DateTime $dateFilter, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timeZoneResolver)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $ruleFactory, $conditionFactory, $dateFilter, $timeZoneResolver);
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
