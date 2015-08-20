<?php
header('Location: http://localhost/quips/quips.php');

$job_id = mysql_real_escape_string($_POST["job_id"]);
$job_name = mysql_real_escape_string($_POST["job_name"]);

$db_host = 'localhost'; 
$db_user = 'root';
$db_pwd = 'Quips123'; 
$database = "quips";

mysql_connect($db_host, $db_user, $db_pwd);
mysql_select_db($database) or die(mysql_error());
$delete = "DELETE FROM jobs WHERE job_name = $job_name";  
mysql_query($delete); 
?>
