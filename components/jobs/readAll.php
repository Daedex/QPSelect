<?php
	
	require_once('jobs.php');

	$jobs = new Jobs();
	$jobList = $jobs->readAll();
	echo json_encode($jobList);

?>
