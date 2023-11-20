<?php 

class Person {
    var string $name;
    var string $address;
    var string $country;
    var string $city = "Jakarta";
    var ?int $age = null;

    function sayHello(string $name) {
        echo "Halo $name" . PHP_EOL;
    }

}


?>