<?php 

class Book {
    const GENRE = "Action";
    var string $title;
    var string $author;

    function displayInfo() {
        echo "Title: {$this->title}" . PHP_EOL;
        echo "Author: {$this->author}" . PHP_EOL;
        echo "Genre: " . self::GENRE . PHP_EOL;
    }
}

?>