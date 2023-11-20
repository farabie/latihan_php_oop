<?php 


require_once "4.Function/Data/Car.php";

$suzuki = new Car();
//Function biasa
$suzuki->driveCar("Suzuki");
//Function return
echo "Tired Car: {$suzuki->tireCar()}" . PHP_EOL;
//Default
echo "Brand Car: {$suzuki->brand}" . PHP_EOL;
echo "Color Car: {$suzuki->color}" . PHP_EOL;
echo "------------------" . PHP_EOL;

$suzuki->brand = "Suzuki";
$suzuki->color = "Biru";

echo "Brand Car: {$suzuki->brand}" . PHP_EOL;
echo "Color Car: {$suzuki->color}" . PHP_EOL;

//Mengubah propertie dari biru jadi merah
$suzuki->color = "Merah";
echo "New Color: {$suzuki->color}" . PHP_EOL;   


?>