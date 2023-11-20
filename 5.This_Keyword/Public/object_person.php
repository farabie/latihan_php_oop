<?php 

require_once "5.This_Keyword/Data/person.php";

$person = new Person();

//Ini error karena $person nya sendiri itu belum di deklarasikan $namenya
// $person->sayHello("Farabie");

$person->name = "Abie";
//Function ini otomatis memanggil $name object saat ini
$person->sayHello("Farel");

?>