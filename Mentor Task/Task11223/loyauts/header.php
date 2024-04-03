<?php
    $home = "Ana Sehife";
    $menu = "Menu";
    $about = "Haqqimizda";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="navbar_logo">
                <a href="index.php">
                <img src="./assets/img/a35554ea00f9f65bf7c6ef6051d4e98e.png" alt="#">
                </a>
            </div>

            <div class="navbarlinks">
                <ul>
                    <li><a class="active" href="index.php" aria-current="page"><?= $home?></a></li>
                    <li><a class="" href="menu.php"><?= $menu?></a></li>
                    <li><a class="" href="about.php"><?= $about?></a></li>
                </ul>
            </div>


        </nav>
    </header>
   