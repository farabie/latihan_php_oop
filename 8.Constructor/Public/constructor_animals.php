<?php 

require_once "8.Constructor/Data/Animals.php";

$dog = new Animals("Cembul", "Belang-Belang", 10);
$dog->sayHello(null);
echo "-----------" . PHP_EOL; 
$dog->sayHello("kijang");
?>