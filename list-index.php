<?php

require __DIR__ . '/include/connect.php';

include "include/getLists.php";
include "include/header.php";
include "include/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ToDoList</title>
</head>
<body style='background-color: #343a40'>
	
<div class="container">
<h1 style="color: #fff; margin-bottom: 25px;">Kawian's To Do List <i style="color: #36e336;" class="far fa-check-square"></i></h1>
	<table class="table table-dark">
	<thead >
		<tr>
		<th style="border: none;" scope="col">List name</th>
		<th style="border: none;" scope="col">See list</th>
		<th style="border: none;" scope="col">Delete list</th>
		<th style="border: none;" scope="col">Edit list</th>
		</tr>
	</thead>		
		<tbody>
			<tr>

			<?php 

				foreach ($result as $row) {
			?>
				<td style="border: none;"><?php echo $row['list_name']?></td>
				<td style="border: none;"><a class="btn btn-info" href="task-index.php?id=<?php echo $row['list_id']?>"><i class="fas fa-folder"></i></a></td>
				<td style="border: none;"><a class="btn btn-danger" onclick="return isValid()" href="lijst/delete-list.php?list_id=<?php echo $row['list_id']?>"><i class="fas fa-dumpster"></i></a></td>
				<td style="border: none;"><a class="btn btn-warning"  href="lijst/edit-list.php?list_id=<?php echo $row['list_id']?>"><i class="fas fa-edit"></i></a></td>
			</tr>
			<?php 
				}
			?>
		</tbody>     
	</table>

		<a class="btn btn-light createBtn" href="lijst/create-list.php">+ Voeg een lijst toe</a>
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