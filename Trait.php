<?php 

require_once "Data/SayGoodBye.php";

use Data\Trait\{Person};

$person = new Person();
$person->sayHello(name: "Rudi");
$person->sayGoodBye(name: "Jaka");

$person->name = "Eko";
var_dump($person);

$person->run();