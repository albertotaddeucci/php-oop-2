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
        $this->category = $_category;

        if (is_numeric($_price)) {

            $this->price = $_price;
        } else {
            throw new Exception("Prezzo non valido");
        }
    }
}
