<?php 


class Person {

    const AUTHOR = "Muhammad Farabie";
    var ?string $name;
    var ?string $address;
    var string $country = "Indonesia";

    public function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name) {
        if(is_null($name)) {
            echo "Hello My name is {$this->name}";
        }else {
            echo "Hello $name My name is {$this->name}" . PHP_EOL;
            echo "My Address is {$this->address}" . PHP_EOL;
        }
    }
}

?>