<?php


class Food extends Product
{

    public $weight;

    function __construct($_name, $_price, Category $_category, $_weight)
    {

        parent::__construct($_name, $_price, $_category);

        $this->weight = $_weight;
    }
}
