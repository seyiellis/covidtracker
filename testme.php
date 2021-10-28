<?php
require_once "Covidtracker.php";

$time = 'daily';
$country = 'England';

$y = new Covidtracker();

$result = $y->connectApi($time, $country); 

$rst = $y->run();

print_r($result); 

//print_r($rst); 



?>
