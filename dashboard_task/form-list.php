<?php 
include("header.php");
include("conn-database.php"); 
include("database-task.php"); ?>


<h1>List Tasks</h1>
<hr></hr>

<?php
	if (array_key_exists("deleted", $_GET) && $_GET['deleted'] == true):
?>
		<p class="alert-success">Task deleted successfully!</p>
<?php
	endif;
?>

<?php
	if (array_key_exists("changed", $_GET) && $_GET['changed'] == true):
?>
		<p class="alert-success">Task changed successfully!</p>
<?php
	endif;
?>

<table class="table table-striped table-bordered">
<?php
$tasks = listTask($conn);
foreach ($tasks as $task): ?>
	<tr>
		<td><?=$task['task_name'];?></td>
		<td>
			<a href="alter-form-task.php?task_id=<?=$task['task_id']?>" class="btn btn-primary">Alter</a>
		</td>
		<td>
			<form action="delete-task.php" method="post">
				<input type="hidden" name="task_id" value="<?=$task['task_id']?>">
				<button class="btn btn-danger">Delete</a>
			</form>
		</td>
	</tr>
<?php
endforeach; ?>
</table>
<?php include("footer.php"); ?>