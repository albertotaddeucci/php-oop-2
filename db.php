<?php



$dog = new Category("dog", "<i class='fa-solid fa-dog'></i>");
$cat = new Category("cat", "<i class='fa-solid fa-cat'></i>");

$products = [
    new Product("Guinzaglio", 19.99, $dog),
    new Food("Croccantini", 5.49, $cat, "300g"),
    new Game("Topolino meccanico", 10.99, $cat, true, 4, 10),
    new Kennel("Cuccia", 39, $dog, 100, 150),


];


$products[0]->image = "https://www.buranchetto.com/3910-large_default/guinzaglio-ammortizzato-roamer.jpg";
$products[1]->image = "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700340160/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno";
$products[2]->image = "https://shop-cdn-m.mediazs.com/bilder/5/800/55405_PLA_Katzenspielzeug_Maus_mit_Katzenminze_und_Stimme_FG_DSC0500_5.jpg";
$products[3]->image = "https://www.robinsonpetshop.it/8113-large_default/ferplast-cuccia-domus-large.jpg";

$user1 = new User("jhon", "jhon@doe");
$user2 = new RegisteredUser("jhon", "jhon@doe", "1234");


$userConnected = $user1;
