<?php


namespace Training\DependencyExample\Model\VirtualType;


class DefaultName
{
    protected Name $name;

    public function __construct(Name $name)
    {
        $this->name =$name;
    }

    /**
     * @return Name
     */
    public function getName(): string
    {
        return $this->name->getName('Default Name');
    }
}
