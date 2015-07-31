<?php
$email = mysql_real_escape_string($_POST["email"]);
$Database = "quips";
mysql_connect("localhost", "root", "Quips321") or die(mysql_error());
mysql_select_db($Database) or die(mysql_error());
$query = "SELECT * FROM user WHERE email = '{$email}'";
$result = mysql_query($query); 
echo (mysql_num_rows($result) == 0) ? 'NO' : 'YES'; 
?>