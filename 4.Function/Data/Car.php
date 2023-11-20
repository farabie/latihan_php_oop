<?php 


class Car {
    var string $brand = "Uknown";
    var string $color = "White";

    function driveCar(string $brand) {
        echo "I Drive Car $brand" . PHP_EOL;
    }
    function tireCar()
    {
        return 4;
    }
}

?>