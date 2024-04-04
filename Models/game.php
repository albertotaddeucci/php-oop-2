<?php
require_once __DIR__ . "/Traits/Sizeable.php";



class Game extends Product
{
    use Sizeable;
    public $hasBattery;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_price
     * @param  Category $_category
     * @param  boolean $_hasBattery
     */
    function __construct($_name, $_price, Category $_category, $_hasBattery, $_height, $_width)
    {

        parent::__construct($_name, $_price, $_category);

        $this->hasBattery = $_hasBattery;
        $this->height = $_height;
        $this->width = $_width;
    }
}
