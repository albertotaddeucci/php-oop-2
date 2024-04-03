<?php

// require './Models/product.php';
// require './Models/category.php';

$dog = new Category("dog", "<i class='fa-solid fa-dog'></i>");
$cat = new Category("cat", "<i class='fa-solid fa-cat'></i>");

$products = [
    new Product("Guinzaglio", "19.99€", $dog),
    new Product("Croccantini", "5.80€", $cat)
];


$products[0]->image = "https://www.buranchetto.com/3910-large_default/guinzaglio-ammortizzato-roamer.jpg";
$products[1]->image = "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700340160/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno";
