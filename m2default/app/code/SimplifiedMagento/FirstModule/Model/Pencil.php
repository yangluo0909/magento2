<?php


namespace SimplifiedMagento\FirstModule\Model;


use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;

    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size =$size;
    }

    /**
     * @return mixed
     */
    public function getPencilType()
    {
        return "Our Pencil has ".$this->color->getColor()." Color and ".$this->size->getSize()." Size";
    }
}
