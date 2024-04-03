<?php


class User
{

    protected $username;
    protected $email;

    function __construct($_username, $_email)
    {
        $this->username = $_username;
        $this->email = $_email;
    }

    public function getPrice($price)
    {
        return $price;
    }
}
