<?php 


class Fruit {
    var string $name ;
    var string $color;

    function getFruit(?string $name, ?string $color) {
        if(is_null($name) && is_null($color)) {
            echo "Name Fruit is {$this->name} My Color is {$this->color}" . PHP_EOL;
        }else {
            echo "Fruit is $name and Color is $color" . PHP_EOL;
        }
    }

    public function __construct(string $name, string $color){
        $this->name = $name;
        $this->color = $color;
    }
}

?>