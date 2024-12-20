<?php 

// $dateTime = new DateTime();
// $dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
// $dateTime->setDate(1990, 1, 20);
// $dateTime->setTime(8, 8, 8);

// $dateTime->add(new DateInterval("P1Y"));

// $minusOneMonth = new DateInterval("P1M");
// $minusOneMonth->invert = 1;
// $dateTime->add($minusOneMonth);

// var_dump($dateTime);


$now = new DateTime();
// $now->setTimezone(new DateTimeZone("Asia/Jakarta"));
$stringTime = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini :$stringTime" . PHP_EOL; 