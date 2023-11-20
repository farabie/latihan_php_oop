<?php

class Person
{
    var string $name;
    var string $address;
    var string $country;

    function sayHello(?string $name)
    {
        //Jadi $this->name disini mengacu pada $name object saat ini
        if (is_null($name)) {
            echo "Hello My name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name My Name is {$this->name} " . PHP_EOL;
        }
    }
}
