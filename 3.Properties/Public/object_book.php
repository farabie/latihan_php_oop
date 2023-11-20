<?php 

require_once "3.Properties/Data/book.php";

$book = new Book();

$book->name = "Atomic Habits";
$book->page = 270;
$book->price = 100000;

echo "Name Book: {$book->name}" . PHP_EOL;
echo "Page Book: {$book->page}" . PHP_EOL;
echo "Price Book ". ($book->price) . PHP_EOL;


?>