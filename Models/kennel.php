<?php


class Kennel extends Product
{
    use Sizeable;


    function __construct($_name, $_price, Category $_category,  $_height, $_width)
    {

        parent::__construct($_name, $_price, $_category);


        $this->height = $_height;
        $this->width = $_width;
    }
}
