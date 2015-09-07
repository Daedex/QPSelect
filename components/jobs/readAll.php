<?php
	
	require_once('jobs.php');

	$user_id = $_GET["user_id"];

	$jobs = new Jobs();
	$jobList = $jobs->readAll($user_id);
	echo json_encode($jobList);

?>
