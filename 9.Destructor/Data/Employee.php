<?php 

class Employee {
    var string $name = "Uknown";
    var string $idUser;
    var string $email = "uknown@gmail.com";
    var string $password = "users123";

    function infoEmployee(?string $name, ?string $email, ?string $password) {
        if(is_null($name) && is_null($email) && is_null($password)) {
            echo "Name Employee: {$this->name}, Email: {$this->email}" . PHP_EOL;
        }else {
            echo "Name: $name, Email: $email" . PHP_EOL;
        }
    }

    public function __construct(string $name, string $email, string $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __destruct() {
        echo "Object Constructor {$this->name} is Destructor". PHP_EOL;
    }
}


?>