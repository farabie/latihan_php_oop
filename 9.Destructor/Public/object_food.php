<?php 

require_once "9.Destructor/Data/Food.php";

$bread = new Food("Croisant", "Creamy");
$bread->eat(null, null);
$bread->eat("Pizza", "Hots");

?>