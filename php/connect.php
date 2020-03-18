<?php
$servername = "localhost";
$server = "root";
$password = "";
$myDB = "ToDoList";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$myDB",$userame, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed, try again" . $e->getMessage();
}