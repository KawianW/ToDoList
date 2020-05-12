<?php 

$list_id = $_GET['list_id'];

include '../include/connect.php';

$query = $dbconn->prepare("DELETE FROM `Lists` WHERE list_id = :list_id");
$query->bindParam(":list_id" , $list_id);
$query->execute();
var_dump($query);

header('location: ../list-index.php');
?>