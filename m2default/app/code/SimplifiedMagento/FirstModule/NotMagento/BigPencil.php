<?php


namespace SimplifiedMagento\FirstModule\NotMagento;


class BigPencil implements PencilInterface
{

    /**
     * @return mixed
     */
    public function getPencilType()
    {
        echo "Big Pencil";
    }
}
