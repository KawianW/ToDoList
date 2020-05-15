<?php
include "../include/header.php";
?>
<body style='background-color: #343a40'>
  <div class="container">
  <h1 style="color:#ffffff"> Maak een nieuwe taak aan </h1>
    <form action="creating-task.php" method="POST">
      <div class="form-group">
        <label for="taskName" style="color:#ffffff;">task name</label>
        <input type="text" class="form-control" id="task_name" name="task_name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>