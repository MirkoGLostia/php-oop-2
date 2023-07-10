<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");

$dogCategory = new Category("dog", "Cane");
$catCategory = new Category("cat", "Gatto");

$foods = [
    $f1 = new Food("Cibo cane", 10, 29.99, $dogCategory, "01/06/2028"),
    $f2 = new Food("Cibo gatto", 7, 39.99, $catCategory, "03/10/2027")
];

$toys = [
    $t1 = new Toy("Gioco 1", 1, 20, $catCategory, "blue", "1-3"),
    $t2 = new Toy("Gioco 2", 2, 40, $dogCategory, "green", "3-5"),
    $t3 = new Toy("Gioco 3", 2, 40, $dogCategory, "green", "3-5"),
    $t4 = new Toy("Gioco 4", 2, 40, $dogCategory, "green", "3-5"),
    $t5 = new Toy("Gioco 5", 2, 40, $dogCategory, "green", "3-5"),
    $t6 = new Toy("Gioco 6", 2, 40, $dogCategory, "green", "3-5"),
    $t7 = new Toy("Gioco 7", 2, 40, $dogCategory, "green", "3-5"),
    $t8 = new Toy("Gioco 8", 2, 40, $dogCategory, "green", "3-5")
];

?>