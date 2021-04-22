<?php
namespace Magento\MultipleWishlist\Model\Item\Collection;

/**
 * Interceptor class for @see \Magento\MultipleWishlist\Model\Item\Collection
 */
class Interceptor extends \Magento\MultipleWishlist\Model\Item\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Sales\Helper\Admin $adminhtmlSales, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Wishlist\Model\Config $wishlistConfig, \Magento\Catalog\Model\Product\Visibility $productVisibility, \Magento\Framework\App\ResourceConnection $coreResource, \Magento\Wishlist\Model\ResourceModel\Item\Option\CollectionFactory $optionCollectionFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\ResourceModel\ConfigFactory $catalogConfFactory, \Magento\Catalog\Model\Entity\AttributeFactory $catalogAttrFactory, \Magento\Wishlist\Model\ResourceModel\Item $resource, \Magento\Framework\App\State $appState, \Magento\Wishlist\Helper\Data $wishlistData, \Magento\Framework\Registry $coreRegistry, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $stockConfiguration, $adminhtmlSales, $storeManager, $date, $wishlistConfig, $productVisibility, $coreResource, $optionCollectionFactory, $productCollectionFactory, $catalogConfFactory, $catalogAttrFactory, $resource, $appState, $wishlistData, $coreRegistry, $connection);
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
