<?php
require __DIR__ . '/include/connect.php';

$stmt = $dbconn->prepare("SELECT * FROM `Tasks`");
$stmt->execute();
$result = $stmt->fetchAll();
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
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Task ID</th>
      <th scope="col">List ID</th>
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

			foreach ($result as $row ) {
		?>

			<td><?php echo $row['task_id'];?></td>
			<td><?php echo $row['list_id'];?></td>
			<td><?php echo $row['task_name'];?></td>
			<td><?php echo $row['task_status'];?></td>
			<td><?php echo $row['task_time'];?></td>
			<td><a class="btn btn-danger" onclick="return isValid()" href="Delete-task.php?id=<?php echo $row['list_id']?>"><i class="fas fa-dumpster"></i></a></td>
			<td><a class="btn btn-warning"  href="edit-task.php?id=<?php echo $row['task_id']?>"><i class="fas fa-edit"></i></a></td>
		</tr>
        <?php 
            }
        ?>
	</tbody>     
</table>

			<button type="button" class="btn btn-light createBtn" href="create-task.php">+ Voeg een taak toe</button>
    
</body>
</html>

<?php 
	$dbconn = null
 ?>