<?php 

$task_id = $_GET['task_id'];

require '../include/connect.php';

$query = $dbconn->prepare("DELETE FROM `Tasks` WHERE task_id = :task_id");
$query->bindParam(":task_id" , $task_id,PDO::PARAM_INT);
$query->execute();

$dbconn = null;

header('location: ../list-index.php');
?>