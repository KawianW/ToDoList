<?php

require __DIR__ . '/include/connect.php';

$stmt = $dbconn->prepare("SELECT * FROM `Lists`");
$stmt->execute();
$result = $stmt->fetchAll();

include "include/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ToDoList</title>
</head>
<body>
	

<table class="table">
  <thead>
    <tr>
	<th scope="col">List ID</th>
	  <th scope="col">List name</th>
	  <th scope="col">See list</th>
	  <th scope="col">Delete list</th>
	  <th scope="col">Edit list</th>
    </tr>
  </thead>		
	<tbody>
		<tr>

		<?php 

			foreach ($result as $row ) {
		?>
			<td><?php echo $row['list_id'];?></td>
			<td><?php echo $row['list_name'];?></td>
			<td><a class="btn btn-info" href="task-index.php?id=<?php echo $row['list_id']?>"><i class="fas fa-folder"></i></a></td>
			<td><a class="btn btn-danger" onclick="return isValid()" href="lijst/delete-list.php?list_id=<?php echo $row['list_id']?>"><i class="fas fa-dumpster"></i></a></td>
			<td><a class="btn btn-warning"  href="lijst/edit-list.php?list_id=<?php echo $row['list_id']?>"><i class="fas fa-edit"></i></a></td>
		</tr>
        <?php 
            }
        ?>
	</tbody>     
</table>

			<a class="btn btn-light createBtn" href="lijst/create-list.php">+ Voeg een lijst toe</a>
    
</body>
</html>

<?php 
	$dbconn = null
 ?>