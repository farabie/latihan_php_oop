<?php 

class Technology {
    var string $name;
    var int $price ;
    const TYPE = "Mobile";

    public function infoType () {
        echo "Technlogy Type: " . self::TYPE . PHP_EOL;
        echo "Name Technology: {$this->name}" . PHP_EOL;
    }
}

?>