<?php 

require_once 'data/Person.php';

$person = new Person("Eko", "Bandung");
$person->name = "Eko";

$person->sayHello("Budi");

$person->info(); 
