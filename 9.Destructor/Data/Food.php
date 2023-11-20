<?php 

class Food {
    var string $name;
    var string $taste;

    function eat(?string $name, ?string $taste) {
        if(is_null($name) && is_null($taste)) {
            echo "Name Food is {$this->name} Taste {$this->taste}" . PHP_EOL;
        }else {
            echo "Food Name is $name and Taste $taste"  . PHP_EOL;
        }
    }

    public function __construct(string $name, string $taste) {
        $this->name = $name;
        $this->taste = $taste;
    }

    public function __destruct() {
        echo "Object {$this->name} is destructor" . PHP_EOL;    
    }
}

?>