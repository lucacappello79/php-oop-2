<?php

require_once './Models/Product.php';

require_once './Models/DogProduct.php';
require_once './Models/DogFood.php';
require_once './Models/DogToy.php';
require_once './Models/DogBed.php';

require_once './Models/CatProduct.php';
require_once './Models/CatFood.php';
require_once './Models/CatToy.php';
require_once './Models/CatBed.php';

$product01 = new DogProduct("Dog food", 25, 2023, "Food");
$product02 = new DogProduct("Dog toy", 25, 2023, "Toy");

$product03 = new CatProduct("Cat food", 25, 2023, "Food");
$product04 = new CatProduct("Cat toy", 25, 2023, "Toy");

$product05 = new DogFood("Dog food Vegan", 19, 2023, "Doggy", 300);
$product06 = new DogFood("Dog food Cheap", 11, 2023, "Doggy", 250);

$product07 = new DogToy("Yellow Toy", 18, 2021, "Plastic");
$product08 = new DogToy("Green Toy", 18, 2021, "Plastic");

$product09 = new DogBed("Small Dog Bed", 50, 2018, "Small");
$product10 = new DogBed("Large Dog Bed", 60, 2018, "Large");

$product11 = new CatFood("Cat Food Vegan", 19, 2023, "Kitty", 300);
$product12 = new CatFood("Cat Food Cheap", 11, 2023, "Kitty", 150);

$product13 = new CatToy("Red Toy", 18, 2021, "Plastic");
$product14 = new CatToy("Purple Toy", 18, 2021, "Plastic");

$product15 = new CatBed("Small Cat Bed", 50, 2018, "Small");
$product16 = new CatBed("Large Cat Bed", 55, 2018, "Large");


$products = [
    $product01,
    $product02,
    $product03,
    $product04,
    $product05,
    $product06,
    $product07,
    $product08,
    $product09,
    $product10,
    $product11,
    $product12,
    $product13,
    $product14,
    $product15,
    $product16,
];
