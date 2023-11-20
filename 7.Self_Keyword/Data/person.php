<?php

class Person
{
    const AUTHOR = "Muhammad Farabie";
    const VERSION = "1.1.1";
    var string $name;

    function info() {
        echo "Author: " . self::AUTHOR . PHP_EOL;
    }

}
