<?php

namespace Training\DependencyExample\Block;

use Magento\Framework\View\Element\Template;
use Training\DependencyExample\Model\Main;

class Example extends Template
{
    protected Main $main;

    public function __construct(Template\Context $context,
                                Main $main,
                                array $data = [])
    {
        parent::__construct($context, $data);
        $this->main = $main;
    }

    public function getMain(): Main
    {
        return $this->main;
    }

}
