<?php
header('Location: http://localhost/quips/quips.html');
//$job_name = mysql_real_escape_string($_POST["new_job"]);
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = 'Quips123'; 
$database = "quips";

mysql_connect($db_host, $db_user, $db_pwd) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error());

//query jobs list
$jobs_list = "SELECT * FROM jobs"; 
$result = mysql_query($jobs_list) or die(mysql_error()); 

echo "<table>"; 
while($record = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" .$record['job_name']. "</td>";
	echo "</tr>"; 
	//echo "<hr>";
}
echo "</table>";
?> 