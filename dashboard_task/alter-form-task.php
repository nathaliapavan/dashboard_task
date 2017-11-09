<?php 
include("header.php");
include("conn-database.php");
include("database-task.php");

$taskID = $_GET['task_id'];
$task = selectTask($conn, $taskID); 
?>


<h1>Alter Task</h1>
<hr></hr>
<form action="alter-task.php" method="post">
	<input type="hidden" name="task_id" value="<?=$task['task_id']?>">
    <div class="form-group">
        <label for="task-name">Task Name</label>
        <input type="task-name" name="task_name" class="form-control" id="id-task-name" placeholder="Enter task name" value="<?=$task['task_name']?>" required>
    </div>
    <div class="form-group">
  	    <button type="submit" name="send" class="btn btn-primary">Alter</button>
    </div>
</form>
<?php include("footer.php"); ?>