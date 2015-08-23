<?php
header('Location: http://localhost/quips/quips.php');
$new_job = mysql_real_escape_string($_POST["new_job"]);
$db_host = 'daedex.com'; 
$db_user = 'stauguu1_admin';
$db_pwd = 'Quips123'; 
$database = "stauguu1_quips";

mysql_connect($db_host, $db_user, $db_pwd);
mysql_select_db($database) or die(mysql_error());
$insert = "INSERT INTO jobs (job_name)
	       VALUES ('$new_job')"; 
mysql_query($insert);
$id = mysql_insert_id(); 
?>