<?php

class RegisteredUser extends User
{
    public $password;


    function __construct($_username, $_email, $_password)
    {

        parent::__construct($_username, $_email, $_password);

        $this->password = $_password;
    }


    public function getPrice($price)
    {
        $discount = $price * 0.02;
        return round(($price - $discount), 2, PHP_ROUND_HALF_UP);
    }
}
