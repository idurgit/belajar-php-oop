<?php 

$matches = [];
$result = preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Edy", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lo Anjing Bangsat.");
var_dump($result);