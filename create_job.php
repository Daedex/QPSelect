<?php
header('Location: http://localhost/quips/quips.html');
$job_name = mysql_real_escape_string($_GET["new_job"]);
$database = "quips";
$location = "localhost";
$user = "root";
$pw = "Quips123"; 
mysql_connect($location, $user, $pw) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$insert = "INSERT INTO jobs (new_job)
	       VALUES ('$job_name')"; 
mysql_query($insert); 
?>