<?php 

require_once "3.Properties/Data/person.php";

//Memanipulasi Properties
$person = new Person();
$person->name = "Muhammad Farabie";
$person->address = "Jalan Perumahan Griya Mentari No 41";
$person->country = "Indonesia";


echo "Name: {$person->name}" . PHP_EOL;
echo "Address: {$person->address}" . PHP_EOL;
echo "Country: {$person->country}" . PHP_EOL;
//Memanggil default Properties
echo "City: {$person->city}" . PHP_EOL;
//Maka akan otomatis isi nya null
echo "Age: {$person->age}" . PHP_EOL;
?>