<?php 

class Circle {
    const PI = 3.41529;
    var int $radius;

    public function calculateArea() {
        return self:: PI * $this->radius * $this->radius;
    }
}


?>