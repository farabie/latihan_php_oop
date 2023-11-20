<?php 

require_once "7.Self_Keyword/Data/circle.php";

$circle = new Circle();
$circle->radius = 14;

echo "Calculate Circle : " . $circle->calculateArea() . PHP_EOL;

?>