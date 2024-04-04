<?php


$dog = new Category("dog", "<i class='fa-solid fa-dog'></i>");
$cat = new Category("cat", "<i class='fa-solid fa-cat'></i>");

$error = null;

$products = [];
try {
    $guinzaglio = new Product("Guinzaglio", 19.99, $dog);
    $guinzaglio->image = "https://www.buranchetto.com/3910-large_default/guinzaglio-ammortizzato-roamer.jpg";
    array_push($products, $guinzaglio);
} catch (Exception $e) {
    $error = "Guinzaglio - Errore: " . $e->getMessage();
}
try {
    $croccantini = new Food("Croccantini", 3.49, $cat, "300g");
    $croccantini->image = "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1700340160/products/pim/5900951283734_B1_ITA/whiskas-croccantini-per-gatti-adulti-con-tonno";
    array_push($products, $croccantini);
} catch (Exception $e) {
    $error = "Croccantini - Errore: " . $e->getMessage();
}
try {
    $topolino = new Game("Topolino meccanico", 10.99, $cat, true, 4, 10);
    $topolino->image = "https://shop-cdn-m.mediazs.com/bilder/5/800/55405_PLA_Katzenspielzeug_Maus_mit_Katzenminze_und_Stimme_FG_DSC0500_5.jpg";
    array_push($products, $topolino);
} catch (Exception $e) {
    $error = "Topolino meccanico - Errore: " . $e->getMessage();
}
try {
    $cuccia = new Kennel("Cuccia", 39, $dog, 100, 150);
    $cuccia->image = "https://www.robinsonpetshop.it/8113-large_default/ferplast-cuccia-domus-large.jpg";
    array_push($products, $cuccia);
} catch (Exception $e) {
    $error = "Cuccia - Errore: " . $e->getMessage();
}



$user1 = new User("jhon", "jhon@doe");
$user2 = new RegisteredUser("jhon", "jhon@doe", "1234");


$userConnected = $user1;
