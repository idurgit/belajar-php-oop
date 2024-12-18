<?php 

require_once "data/Product.php";

$products = new Product("Apple", 20000);

echo $products->getName() . PHP_EOL;
echo $products->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 100);
$dummy->info();