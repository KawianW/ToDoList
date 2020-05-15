<?php

require "../include/connect.php";

$task_name = $_POST['task_name'];

$query = $dbconn->prepare("INSERT INTO Tasks (task_name) VALUES(:task_name)");
$query->bindParam(":task_name" , $task_name ,PDO::PARAM_STR);
$query->execute();

$dbconn = null;

header('location: ../task-index.php');

?>