<?php
namespace Magento\Customer\Block\Adminhtml\Group\Edit;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Group\Edit
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Group\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Customer\Api\GroupManagementInterface $groupManagement, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $groupRepository, $groupManagement, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}
