<?php
    require "../include/connect.php";

    $list_id = $_GET['list_id'];


    $query = $dbconn->prepare("SELECT * FROM `lists` WHERE list_id = :list_id");
    $query->bindParam(":list_id" , $list_id,PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    include "../include/header.php";
?>
<form action="editing-List.php" method="POST">
  <div class="form-group">
    <label for="listName">List name</label>
    <input type="text" class="form-control" name="list_name" value="<?php echo $result['list_name'] ?>" placeholder="<?php echo $result['list_name'] ?>" required>
                <input type="hidden" name="list_id" value="<?php echo $result['list_id'] ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>