<?php
require "../include/connect.php";

$list_id = $_GET['list_id'];
$list_name = $_POST['list_name'];

$query = $dbconn->prepare("SELECT * FROM `lists` WHERE list_id = :list_id");
$query->bindParam(":list_id" , $list_id,PDO::PARAM_INT);
$query->bindParam(":list_name" , $List_name,PDO::PARAM_STR);
$query->execute();

$dbconn = null;

header('location: ../list-index.php');

?>