<?php 
include("header.php"); 
include("conn-database.php"); 
include("database-task.php");

$conn = mysqli_connect('localhost', 'root', '', 'dashboard_task');

if (isset($_POST["task_id"]) && !empty($_POST["task_id"])) {
	$taskID = $_POST["task_id"];
	$taskName = $_POST["task_name"];
	if(alterTask($conn, $taskID, $taskName)){ ?>
		<p class="alert-success">Task changed successfully!</p>
	<?php }else { 
		$message = mysqli_error($conn); ?>
		<p class="alert-danger">Task change failed. Error: <?= $message; ?></p>
	<?php }
	mysqli_close($conn);
}

header("Location: form-list.php?changed=true");
die();
?>


