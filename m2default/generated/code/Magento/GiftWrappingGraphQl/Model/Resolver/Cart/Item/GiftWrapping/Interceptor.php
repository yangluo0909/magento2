<?php
namespace Magento\GiftWrappingGraphQl\Model\Resolver\Cart\Item\GiftWrapping;

/**
 * Interceptor class for @see \Magento\GiftWrappingGraphQl\Model\Resolver\Cart\Item\GiftWrapping
 */
class Interceptor extends \Magento\GiftWrappingGraphQl\Model\Resolver\Cart\Item\GiftWrapping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftWrapping\Api\WrappingRepositoryInterface $giftWrappingRepository)
    {
        $this->___init();
        parent::__construct($giftWrappingRepository);
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
