<?php

function createTask($conn, $taskName) {
	$query = "INSERT INTO task (task_name) VALUES ('{$taskName}')";
    return mysqli_query($conn, $query);
}

function listTask($conn) {
	$collectionTask = array();
	$query = "SELECT * FROM task";
    $result = mysqli_query($conn, $query);
    while($task = mysqli_fetch_assoc($result)) {
    	array_push($collectionTask, $task);
    }
    
    return $collectionTask;
}

function selectTask($conn, $taskID) {
	$query = "SELECT * FROM task WHERE task_id = {$taskID}";
	$result = mysqli_query($conn, $query);
	return mysqli_fetch_assoc($result);
}

function deleteTask($conn, $taskID) {
	$query = "DELETE FROM task WHERE task_id = {$taskID}";
	return mysqli_query($conn, $query);
}

function alterTask($conn, $taskID, $taskName) {

	$query = "UPDATE task SET task_name = '{$taskName}' WHERE task_id = '{$taskID}'";
	return mysqli_query($conn, $query);
}