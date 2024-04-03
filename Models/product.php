<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $image;


    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     * 
     */
    function __construct($_name, $_price, Category $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }
}
