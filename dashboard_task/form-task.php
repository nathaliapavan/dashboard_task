<?php include("header.php"); ?>

<h1>Create Task</h1>
<hr></hr>
<form action="task.php" method="post">
    <div class="form-group">
        <label for="task-name">Task Name</label>
        <input type="task-name" name="task_name" class="form-control" id="id-task-name" placeholder="Enter task name" required>
    </div>
    <div class="form-group">
  	    <button type="submit" name="send" class="btn btn-primary">Create</button>
    </div>
</form>
<?php include("footer.php"); ?>