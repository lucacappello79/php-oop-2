<?php

require_once './Models/Product2.php';

require_once './Models/Toy.php';
require_once './Models/Food.php';
require_once './Models/Bed.php';

$product01 = new Food("Dog Food Brand", "Dog Food 1", 10, "fa-solid fa-dog", "Dog", 250);
$product02 = new Food("Dog Food Brand", "Dog Food 2", 15, "fa-solid fa-dog", "Dog", 300);
$product03 = new Food("Cat Food Brand", "Cat Food 1", 10, "fa-solid fa-cat", "Cat", 250);
$product04 = new Food("Cat Food Brand", "Cat Food 1", 25, "fa-solid fa-cat", "Cat", 300);

$product05 = new Toy("Dog Toy Brand", "Dog Toy 1", 18, "fa-solid fa-dog", "Dog", "Rubber");
$product06 = new Toy("Dog Toy Brand", "Dog Toy 2", 22, "fa-solid fa-dog", "Dog", "Plastic");
$product07 = new Toy("Cat Toy Brand", "Cat Toy 1", 18, "fa-solid fa-cat", "Cat", "Rubber");
$product08 = new Toy("Cat Toy Brand", "Cat Toy 1", 22, "fa-solid fa-cat", "Cat", "Plastic");

$product09 = new Bed("Dog Bed Brand", "Dog Bed 1", 50, "fa-solid fa-dog", "Dog", "Medium");
$product10 = new Bed("Dog Bed Brand", "Dog Bed 2", 60, "fa-solid fa-dog", "Dog", "Large");
$product11 = new Bed("Cat Bed Brand", "Cat Bed 1", 50, "fa-solid fa-cat", "Cat", "Medium");
$product12 = new Bed("Cat Bed Brand", "Cat Bed 1", 60, "fa-solid fa-cat", "Cat", "Large");

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
];
