<?php

class InsertDB
{
    public static ?self $instance = null;
    public static $connection;
    public static function instanciate()
    {
        if (!static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    private function __construct()
    {
        try {
            static::$connection = new PDO(
                'mysql:dbname=rolls;host=localhost;charset=utf8',
                'root',
                ''
            );
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function insertDB($side, $result)
    {
        $my_insert = static::$connection->prepare("
        INSERT
        INTO `rolls`
        (`value`, `dice_rolled`)
        VALUES ($side, $result)
        ");
        // $my_insert->bindParam(`value`, $side);
        // $my_insert->bindParam(`dice_rolled`, $result);

        if ($my_insert->execute()) {
            echo "New record created successfully";
            echo "<br>";
        } else {
            echo "Unable to create record";
            echo "<br>";
        }
    }
}
