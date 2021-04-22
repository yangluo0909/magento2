<?php


namespace Training\DependencyExample\Model;


class NonInjectable implements NonInjectableInterface
{
    public function getId():string
    {
        return "Class Non-Injectable";
    }
}
