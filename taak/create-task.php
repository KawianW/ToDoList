<?php
include "../include/header.php";
?>

<!-- this is the form you are seeing when you want to create the task -->
<body style='background-color: #343a40'>
    <div class="container">
        <h1 style="color: #ffffff">Taak toevoegen aan lijst "<?php echo $result['list_name'] ?>"</h1>
        <form action="creating-task.php" method="POST">
            <input type="hidden" id="list_id" name="list_id" value="<?php echo $result['list_id'] ?>">
            <div class="form-group">
                <label style="color: #ffffff" for="task_name">Taak beschrijving: </label>
                <input type="text" class="form-control" name="task_name" placeholder="Voer hier uw taakbeschrijving in" required>
            </div>
            <div class="form-group">
                <label style="color: #ffffff" for="task_time">Tijd benodigd (in minuten):</label>
                <input type="number" class="form-control" name="task_time" max="1440" required>
            </div>
            <div class="form-group">
                <label style="color: #ffffff" for="task_status">Status van de taak</label>
                <select class="form-control" name="task_status" id="task_status" required>
                    <option>Nog niet begonnen</option>
                    <option>Bezig</option>
                    <option>Afgemaakt</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Taak toevoegen aan lijst</button>
        </form>
    </div>
</body>