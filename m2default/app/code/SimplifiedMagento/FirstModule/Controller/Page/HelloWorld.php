<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends Action
{
    protected $pencilInterface;
    protected $productRepositoryInterface;

    public function __construct(Context $context,
                                PencilInterface $pencilInterface,
                                ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->productRepositoryInterface= $productRepositoryInterface;
        $this->pencilInterface = $pencilInterface;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
       echo $this->pencilInterface->getPencilType();
    }
}
