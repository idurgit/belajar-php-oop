<?php 

require_once "helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// echo $mathHelper->name . PHP_EOL;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Eko Kurniawan";

echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;