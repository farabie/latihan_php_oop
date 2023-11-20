<?php

require_once "9.Destructor/Data/Person.php";


$person = new Person("Abie", "Perumahan Griya Mentari");
// $person->name = "Zoe";

$person->sayHello("Farel");
echo "----------------" . PHP_EOL;
$person->sayHello(null);
