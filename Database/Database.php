<?php
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toy.php";

$cat = new Category("cat");
$dog = new Category("dog");

$mouse = new Toy("mouse", 5, $cat);
$bone = new Toy("bone", 10, $dog);

$products = [
    $mouse,
    $bone
];
