<?php

// require './Models/product.php';
// require './Models/category.php';

$dog = new Category("dog");
$cat = new Category("cat");

$products = [
    new Product("Guinzaglio", "19.99€", $dog),
    new Product("Croccantini", "5.80€", $cat)
];
