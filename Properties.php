<?php 

require_once 'data/Person.php';

$person = new Person("Eko", "Bandung");
$person->name = 'Eko'; 
$person->address = 'Bandung'; 


var_dump($person);

echo "Name : $person->name" . PHP_EOL; 
echo "Address : $person->address" . PHP_EOL; 
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Jaka", null);
$person2->name = "Jaka"; 
$person2->address = null;

echo "Name : $person2->name" . PHP_EOL; 
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;