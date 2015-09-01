<?php

require_once('mysqli_connect.php');

header('Location: http://localhost/quips/quips.php');
$new_job = mysql_real_escape_string($_POST["new_job"]);

$insert = "INSERT INTO jobs (job_name)
	       VALUES ('$new_job')"; 
mysql_query($insert);

?>