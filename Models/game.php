<?php


class Game extends Product
{
    public $hasBattery;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_price
     * @param  Category $_category
     * @param  boolean $_hasBattery
     */
    function __construct($_name, $_price, Category $_category, $_hasBattery)
    {

        parent::__construct($_name, $_price, $_category);

        $this->hasBattery = $_hasBattery;
    }
}
