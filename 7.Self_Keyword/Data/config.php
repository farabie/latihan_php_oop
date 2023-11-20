<?php 

class Config {
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "password";
    const DB_NAME = "mydatabase";

    function displayDatabaseInfo() {
        echo "Database Host: " . self::DB_HOST . PHP_EOL;
        echo "Database User: ". self::DB_USER . PHP_EOL;
        echo "Database Password: ". self::DB_PASSWORD . PHP_EOL;
        echo "Database Name: ". self::DB_NAME . PHP_EOL;
    }
}

?>