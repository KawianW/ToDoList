<?php
    require "../include/connect.php";

    $task_id = $_GET['task_id'];


    $query = $dbconn->prepare("SELECT * FROM `Tasks` WHERE task_id = :task_id");
    $query->bindParam(":task_id" , $task_id,PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    include "../include/header.php";
?>
<body style='background-color: #343a40'>
  <div class="container p-0">
    <h1 style="color:#ffffff"> Pas de taak aan </h1>
    <form action="editing-task.php" method="POST">
      <div class="form-group">
        <label for="taskName" style="color:#ffffff;">Task name</label>
        <input type="text" class="form-control" name="task_name" value="<?php echo $result['task_name'] ?>" placeholder="<?php echo $result['task_name'] ?>" required>
                    <input type="hidden" name="task_id" value="<?php echo $result['task_id'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>