<?php 
include("header.php"); 
include("conn-database.php"); 
include("database-task.php");

$conn = mysqli_connect('localhost', 'root', '', 'dashboard_task');

if (isset($_POST["task_name"]) && !empty($_POST["task_name"])) {
    $taskName = $_POST["task_name"];
	if(createTask($conn, $taskName)){ ?>
		<p class="alert-success">Task created successfully!</p>
	<?php }else { 
		$message = mysqli_error($conn); ?>
		<p class="alert-danger">Task creation failed. Error: <?= $message; ?></p>
	<?php }
	mysqli_close($conn);
}

include("footer.php") ?>
