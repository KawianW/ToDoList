<?php
include "../include/header.php";
?>

<form action="creating-List.php" method="POST">
  <div class="form-group">
    <label for="listName">List name</label>
    <input type="text" class="form-control" id="list_name" name="list_name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
