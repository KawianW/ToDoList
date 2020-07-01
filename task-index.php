<?php
require __DIR__ . '/include/connect.php';
$list_id = $_GET['id'];
$query = $dbconn->prepare("SELECT * FROM `Tasks` WHERE list_id = :list_id");
$query->bindParam(":list_id" , $list_id,PDO::PARAM_INT);
$query->execute();
$result = $query->fetchAll();

include "include/header.php";
include "include/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ToDoList</title>
	<link rel="stylesheet" type="css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style='background-color: #343a40'>

<div class="container">
	<table class="table table-dark">
	<thead>
		<tr>
		<th scope="col">Task name</th>
		<th scope="col">Task status</th>
		<th scope="col">Task time</th>
		<th scope="col">Delete Task</th>
		<th scope="col">Edit Task</th>
		</tr>
	</thead>		
		<tbody>
			<tr>

			<?php 

				foreach ($result as $row) {
			?>
				<td><?php echo $row['task_name'];?></td>
				<td><?php echo $row['task_status'];?></td>
				<td><?php echo $row['task_time'];?></td>
				<td><a class="btn btn-danger" onclick="return isValid()" href="taak/delete-task.php?task_id=<?php echo $row['task_id']?>"><i class="fas fa-dumpster"></i></a></td>
				<td><a class="btn btn-warning"  href="taak/edit-task.php?task_id=<?php echo $row['task_id']?>"><i class="fas fa-edit"></i></a></td>
			</tr>
			<?php 
				}
			?>
		</tbody>     
	</table>

	<a class="btn btn-light createBtn" href="taak/create-task.php?list_id=<?php echo $list_id?>">+ Voeg een taak toe</a>
</div>  
</body>
</html>

<script type="text/javascript">
	function isValid(){
		if(!confirm("weet u zeker dat u dit spel wilt verwijderen?")){
			return false;
		}
		return true;
	}
</script>


<?php 
	$dbconn = null
 ?>