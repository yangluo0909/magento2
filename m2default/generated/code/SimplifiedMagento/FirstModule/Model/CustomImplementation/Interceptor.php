<?php
namespace SimplifiedMagento\FirstModule\Model\CustomImplementation;

/**
 * Interceptor class for @see \SimplifiedMagento\FirstModule\Model\CustomImplementation
 */
class Interceptor extends \SimplifiedMagento\FirstModule\Model\CustomImplementation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\ProductInterface $product, $saveOptions = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($product, $saveOptions);
    }
}
