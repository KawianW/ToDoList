<?php
require "../include/connect.php";
include "../include/getLists.php";

$list_id = $_GET['list_id'];

$task_id = $_GET['task_id'];
$task_name = $_POST['task_name'];
$task_status = $_POST['task_status'];
$task_time = $_POST['task_time'];


// Prepares the statement to update the tasks.

$query = $dbconn->prepare("UPDATE Tasks SET task_name = :task_name, task_time = :task_time, task_status = :task_status WHERE task_id = :task_id");
$query->bindParam(':task_name', $_POST['task_name'], PDO::PARAM_STR);
$query->bindParam(':task_time', $_POST['task_time'], PDO::PARAM_STR);
$query->bindParam(':task_status', $_POST['task_status'], PDO::PARAM_STR);
$query->bindParam(':task_id', $_POST['task_id'], PDO::PARAM_INT);
$query->execute();

$dbconn = null;


header("location: ../task-index.php?list_id=" .  $_POST['list_id']);

?>