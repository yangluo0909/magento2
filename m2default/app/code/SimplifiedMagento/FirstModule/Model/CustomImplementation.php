<?php

namespace SimplifiedMagento\FirstModule\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class CustomImplementation implements ProductRepositoryInterface
{

    /**
     * @param Data\ProductInterface $product
     * @param bool $saveOptions
     * @return Data\ProductInterface
     */


    /**
     * @param string $sku
     * @param bool $editMode
     * @param int|null $storeId
     * @param bool $forceReload
     * @return Data\ProductInterface
     */
    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement get() method.
    }

    /**
     * @param int $productId
     * @param bool $editMode
     * @param int|null $storeId
     * @param bool $forceReload
     * @return Data\ProductInterface
     */
    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @param Data\ProductInterface $product
     * @return bool
     */
    public function delete(ProductInterface $product)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param string $sku
     * @return bool
     */
    public function deleteById($sku)
    {
        // TODO: Implement deleteById() method.
    }

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return Data\ProductSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }

    /**
     * @param Data\ProductInterface $product
     * @param bool $saveOptions
     * @return Data\ProductInterface
     */
    public function save(ProductInterface $product, $saveOptions = false)
    {
        // TODO: Implement save() method.
    }
}
