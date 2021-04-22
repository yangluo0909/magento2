<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

use Training\DependencyExample\Model\VirtualType\DefaultName;
use Magento\Framework\DataObject;

class Main
{
    protected array $data;
    /**
     * @var Injectable
     */
    protected Injectable $injectable;
    protected NonInjectableInterfaceFactory $nonInjectableFactory;
    protected $util;
    protected $heavyOperation;
    protected $defaultName;
    protected $optional;
    protected $methodInjection;

    public function __construct(
        InjectableInterface $injectable,
        NonInjectableInterfaceFactory $nonInjectableFactory,
        AbstractUtil $util,
        HeavyOperation $heavyOperation,
        DefaultName $defaultName,
        Optional $optional=null,
        MethodInjection $methodInjection,
        array $data=[])
    {
        $this->data= $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory=$nonInjectableFactory;
        $this->util = $util;
        $this->heavyOperation =$heavyOperation;
        $this->defaultName = $defaultName;
        $this->optional =$optional;
        $this->methodInjection =$methodInjection;
    }

    public function getId():string
    {
        return $this->data['id'];
    }
    public function getInjectable():Injectable
    {
        return $this->injectable;
    }
    public function getNonInjectable():NonInjectable
    {
        return $this->nonInjectableFactory->create();
    }
    public function getUtil():AbstractUtil
    {
        return $this->util;
    }

    /**
     * @return HeavyOperation
     */
    public function getHeavyOperation(): HeavyOperation
    {
        return $this->heavyOperation;
    }

    /**
     * @return DefaultName
     */
    public function getDefaultName(): DefaultName
    {
        return $this->defaultName;
    }

    /**
     * @return Optional
     */
    public function getOptional(): Optional
    {
        return $this->optional;
    }

    /**
     * @return MethodInjection
     */
    public function getMethodInjectionName(): string
    {
        $dataObject =new DataObject(['name'=>'Method injection']);
        return $this->methodInjection->getName($dataObject);
    }
}
