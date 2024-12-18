<?php 

require_once 'data/Animal.php';

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Kucing";
$cat->run();

$dog = new Dog();
$dog->name = "Anjing";
$dog->run();