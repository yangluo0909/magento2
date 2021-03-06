<?php
namespace Magento\GiftCardGraphQl\Model\Resolver\Product\Options\GiftCardOptions;

/**
 * Interceptor class for @see \Magento\GiftCardGraphQl\Model\Resolver\Product\Options\GiftCardOptions
 */
class Interceptor extends \Magento\GiftCardGraphQl\Model\Resolver\Product\Options\GiftCardOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\Data\ProductCustomOptionInterfaceFactory $customOptionFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($customOptionFactory, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
