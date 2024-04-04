<?php

require './Models/category.php';
require './Models/product.php';
require './Models/food.php';
require './Models/game.php';
require './Models/kennel.php';
require './Models/user.php';
require './Models/registeredUser.php';
// require './Models/Traits/Sizeable.php';



require './db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 2</title>

    <!-- ------------------------------ Bootstrap ------------------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- ------------------------------ My style ------------------------------- -->
    <link rel="stylesheet" href="style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/e2fdc6941e.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container text-center my-5">

        <h1 class="fw-bold">Prodotti</h1>
    </div>

    <?php include './layout/main.php' ?>


    <!-- ------------------------------ Bootstrap ------------------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>