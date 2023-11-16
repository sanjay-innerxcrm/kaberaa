<?php

function dbConnect()
{
    $host = "localhost";
    $dbname = "chetanya_chatapp";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Usage example:
$pdo = dbConnect();