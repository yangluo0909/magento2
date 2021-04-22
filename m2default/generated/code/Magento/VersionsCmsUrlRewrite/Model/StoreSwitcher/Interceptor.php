<?php
namespace Magento\VersionsCmsUrlRewrite\Model\StoreSwitcher;

/**
 * Interceptor class for @see \Magento\VersionsCmsUrlRewrite\Model\StoreSwitcher
 */
class Interceptor extends \Magento\VersionsCmsUrlRewrite\Model\StoreSwitcher implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\VersionsCms\Api\HierarchyNodeRepositoryInterface $nodeRepository, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Framework\HTTP\PhpEnvironment\RequestFactory $requestFactory, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->___init();
        parent::__construct($nodeRepository, $urlFinder, $requestFactory, $searchCriteriaBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function switch(\Magento\Store\Api\Data\StoreInterface $fromStore, \Magento\Store\Api\Data\StoreInterface $targetStore, string $redirectUrl) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'switch');
        return $pluginInfo ? $this->___callPlugins('switch', func_get_args(), $pluginInfo) : parent::switch($fromStore, $targetStore, $redirectUrl);
    }
}
