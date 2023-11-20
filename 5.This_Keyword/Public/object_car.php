<?php 


require_once "5.This_Keyword/Data/Car.php";

$suzuki = new Car();
//Ini kondisi kalau dia null
$suzuki->brand = "Suzuki";
$suzuki->driveCar(null);

//Ini kondisi kalau diisi
$suzuki->brand = "Suzuki";
$suzuki->driveCar("Mazda");


?>