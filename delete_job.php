<?php
$id = $_GET['jobID']; 
$db_host = 'localhost'; 
$db_user = 'root';
$db_pwd = 'Quips123'; 
$database = "quips";

mysql_connect($db_host, $db_user, $db_pwd);
mysql_select_db($database) or die(mysql_error());

if(isset($_GET['jobID'])){

	foreach($id as $job){
		$delete = "DELETE FROM jobs WHERE job_id = $job";  
		mysql_query($delete);
	}
}

header('Location: http://localhost/quips/quips.php');
?>
