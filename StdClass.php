<?php 

$array = [
    "firstName" => "Eko",
    "middleName" => "Kurniawan",
    "lastName" => "Khannedy",
];

$object = (object) $array;

var_dump($object);

echo "First Name : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

echo $array["firstName"] . PHP_EOL;
echo $array["middleName"] . PHP_EOL;
echo $array["lastName"] . PHP_EOL;

$arrayLagi = (array) $object;

var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Eko", "Bandung");
var_dump($person);

$personArray = (array) $person;
var_dump($personArray);