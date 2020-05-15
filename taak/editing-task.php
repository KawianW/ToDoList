<?php
require "../include/connect.php";

$list_id = $_GET['task_id'];
$task_name = $_POST['task_name'];

$query = $dbconn->prepare("UPDATE Tasks SET task_name = :task_name WHERE task_id=:task_id");
$query->bindParam(':task_name', $_POST['task_name'], PDO::PARAM_STR);
$query->bindParam(':task_id', $_POST['task_id'], PDO::PARAM_INT);
$query->execute();

$dbconn = null;


header('location: ../task-index.php');

?>