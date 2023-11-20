<?php 

require_once "6.Constant/Data/person.php";

$person = new Person();
define("APPLICATION", "Belajar Php OOP");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;
echo Person::VERSION . PHP_EOL;



?>