<?php


namespace SimplifiedMagento\FirstModule\NotMagento;

use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;

class RedPencil implements PencilInterface
{

    /**
     * @return mixed
     */
    public function getPencilType()
    {
        return "Red Pencil";
    }
}
