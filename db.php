<?php

require_once './Models/Product.php';
require_once './Models/DogProduct.php';
require_once './Models/DogFood.php';
require_once './Models/CatProduct.php';

$product01 = new DogProduct("Dog food", 25, 2023, "Food");
$product02 = new DogProduct("Dog toy", 25, 2023, "Toy");
$product03 = new CatProduct("Cat food", 25, 2023, "Food");
$product04 = new CatProduct("Cat toy", 25, 2023, "Toy");
$product05 = new DogFood("Dog food Vegan", 15, 2023, "Doggy", 300);
$product06 = new DogFood("Dog food Cheap", 12, 2023, "Doggy", 250);


$products = [
    $product01, $product02, $product03, $product04
];

$products[] = $product05;
