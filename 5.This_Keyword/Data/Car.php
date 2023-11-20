<?php


class Car
{
    var string $brand;
    var string $color;

    function driveCar(?string $brand)
    {
        if (is_null($brand)) {
            echo "You do not have brand: {$this->brand}" . PHP_EOL;
        } else {
            echo "Hi Brand Car $brand My Brand is {$this->brand}" . PHP_EOL;
        }
    }
}
