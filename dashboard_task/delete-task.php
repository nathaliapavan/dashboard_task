<?php
include("header.php"); 
include("conn-database.php"); 
include("database-task.php");

$taskID = $_POST['task_id'];
deleteTask($conn, $taskID);

header("Location: form-list.php?deleted=true");
die();
