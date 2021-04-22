<?php
namespace Magento\Email\Model\Template\Filter;

/**
 * Interceptor class for @see \Magento\Email\Model\Template\Filter
 */
class Interceptor extends \Magento\Email\Model\Template\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Escaper $escaper, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Variable\Model\VariableFactory $coreVariableFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\LayoutInterface $layout, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\App\State $appState, \Magento\Framework\UrlInterface $urlModel, \Pelago\Emogrifier $emogrifier, \Magento\Variable\Model\Source\Variables $configVariables, $variables = [], ?\Magento\Framework\Css\PreProcessor\Adapter\CssInliner $cssInliner = null, array $directiveProcessors = [], ?\Magento\Framework\Filter\VariableResolverInterface $variableResolver = null, ?\Magento\Email\Model\Template\Css\Processor $cssProcessor = null, ?\Magento\Framework\Filesystem $pubDirectory = null)
    {
        $this->___init();
        parent::__construct($string, $logger, $escaper, $assetRepo, $scopeConfig, $coreVariableFactory, $storeManager, $layout, $layoutFactory, $appState, $urlModel, $emogrifier, $configVariables, $variables, $cssInliner, $directiveProcessors, $variableResolver, $cssProcessor, $pubDirectory);
    }

    /**
     * {@inheritdoc}
     */
    public function customvarDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'customvarDirective');
        return $pluginInfo ? $this->___callPlugins('customvarDirective', func_get_args(), $pluginInfo) : parent::customvarDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($value);
    }
}
