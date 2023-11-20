<?php 

require_once "3.Properties/Data/car.php";

$car = new Car();
$car->name = "Avanza";
$car->tire = 4;
$car->price = 1000000;

echo "Name Car: {$car->name}" . PHP_EOL;
echo "Tire Car: {$car->tire}" . PHP_EOL;
echo "Price: {$car->price}" . PHP_EOL;  

?>