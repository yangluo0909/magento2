<?php
namespace Magento\Eav\Model\ResourceModel\Form\Fieldset\Collection;

/**
 * Interceptor class for @see \Magento\Eav\Model\ResourceModel\Form\Fieldset\Collection
 */
class Interceptor extends \Magento\Eav\Model\ResourceModel\Form\Fieldset\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $storeManager, $connection, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        return $pluginInfo ? $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo) : parent::getSelectCountSql();
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        return $pluginInfo ? $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo) : parent::loadWithFilter($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
