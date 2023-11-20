<?php 

class Animals {
    var string $name;
    var string $color;
    var int $leg;

    function sayHello(?string $name) {
        if(is_null($name)) {
            echo "My Animals is {$this->name}" . PHP_EOL;
        }else {
            echo "Animals is $name My Animals is {$this->name}" . PHP_EOL;
            echo "My color animal is {$this->color}" . PHP_EOL;
            echo "Animals name: {$this->name}, Animals Leg is {$this->leg}" . PHP_EOL;
        }
    }

    public function __construct(string $name, string $color, int $leg) 
    {
        $this->name = $name;
        $this->color = $color;
        $this->leg = $leg;
    }
}


?>