<?php
$servername = 'localhost';
$myDB = 'ToDoList';
$username = 'root';
$password = '';

try {
    $dbconn = new PDO("mysql:host={$servername};dbname={$myDB}",$username, $password);
    $dbconn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected";

} catch (PDOException $e) {
    echo "Connection failed, try again" . $e->getMessage();
    die();
}