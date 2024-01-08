<?php

$conn = "";

try {
    $servername = "localhost:3306";
    $dbname = "user_db";
    $username = "root";
    $password = "";

    $conn = new PDO (
        "mysql:host=$servername; dbname=user_db",
        $username, $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

    catch(PDOException $e) {
        echo "Connection Failed". $e->getMessage();
    }

?>