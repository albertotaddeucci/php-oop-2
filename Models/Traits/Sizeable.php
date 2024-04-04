<?php

trait Sizeable
{

    public $height;
    public $width;


    public function getDimension()
    {
        return "Altezza/Lunghezza: $this->height x $this->width (cm) ";
    }
}
