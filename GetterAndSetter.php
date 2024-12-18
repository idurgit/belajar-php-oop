<?php 

require_once 'data/Category.php';

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Name : " . $category->getName() . PHP_EOL;
echo "Expensive : " . $category->isExpensive() . PHP_EOL;

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;