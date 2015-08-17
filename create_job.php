<?php
//$job_id = mysql_real_escape_string($_POST["job_id"]);
$db_host = 'localhost'; 
$db_user = 'root';
$db_pwd = 'Quips123'; 
$job_name = mysql_real_escape_string($_POST["new_job"]);
$Ddtabase = "quips";
mysql_connect($db_host, $db_user, $db_pwd) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
$insert = "INSERT INTO jobs (job_name)
	       VALUES ('$job_name')"; 
mysql_query($insert); 
?>