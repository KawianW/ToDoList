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
    <div class="container">
        <h1 style="color: #ffffff">Taak aanpassen van "<?php echo $result['list_name'] ?>"</h1>
        <form action="editing-task.php" method="POST">
            <input type="hidden" id="list_id" name="list_id" value="<?php echo $result['list_id'] ?>">
            <div class="form-group">
                <label style="color: #ffffff" for="task_name">Taak beschrijving: </label>
                <input type="text" class="form-control" name="task_name" placeholder="Voer hier uw taakbeschrijving in" value="<?php echo $result['task_name'] ?>"  required>
            </div>
            <div class="form-group">
                <label style="color: #ffffff" for="task_time">Tijd benodigd (in minuten):</label>
                <input type="number" class="form-control" name="task_time" max="1440" value="<?php echo $result['task_time'] ?>" required>
            </div>
            <div class="form-group">
                <label style="color: #ffffff" for="task_status">Status van de taak</label>
                <select class="form-control" name="task_status" id="task_status" required>
                    <option>Nog niet begonnen</option>
                    <option>Bezig</option>
                    <option>Afgemaakt</option>
                </select>
            </div>
            <input type="hidden" name="task_id" value="<?php echo $result['task_id'] ?>">
            <input type="hidden" name="list_id" value="<?php echo $result['list_id'] ?>">
            <button type="submit" class="btn btn-primary">Aanpassingen toevoegen</button>
        </form>
    </div>
</body>