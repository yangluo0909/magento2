<?php
namespace Magento\Indexer\Model\Indexer;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Indexer
 */
class Interceptor extends \Magento\Indexer\Model\Indexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\ConfigInterface $config, \Magento\Framework\Indexer\ActionFactory $actionFactory, \Magento\Framework\Indexer\StructureFactory $structureFactory, \Magento\Framework\Mview\ViewInterface $view, \Magento\Indexer\Model\Indexer\StateFactory $stateFactory, \Magento\Indexer\Model\Indexer\CollectionFactory $indexersFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($config, $actionFactory, $structureFactory, $view, $stateFactory, $indexersFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function isScheduled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScheduled');
        return $pluginInfo ? $this->___callPlugins('isScheduled', func_get_args(), $pluginInfo) : parent::isScheduled();
    }
}
