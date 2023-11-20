<?php 

require_once "8.Constructor/Data/Fruit.php";

$banana = new Fruit("Banana", "Yellow");
$banana->getFruit("Banana", "Yellow");
$banana->getFruit(null, null);

?>