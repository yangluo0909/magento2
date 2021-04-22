<?php


namespace SimplifiedMagento\FirstModule\NotMagento;

use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;

class YellowPencil implements PencilInterface
{

    /**
     * @return mixed
     */
    public function getPencilType()
    {
        return "Yellow Pencil";
    }
}
