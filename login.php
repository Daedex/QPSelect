<?php
header('Location: http://localhost/quips/quips.html');
$first_name = mysql_real_escape_string($_POST["first_name"]);
$last_name = mysql_real_escape_string($_POST["last_name"]);
$email = mysql_real_escape_string($_POST["email"]);
$user_name = mysql_real_escape_string($_POST["user_name"]);
$password = mysql_real_escape_string($_POST["password"]);
$Database = "quips";
mysql_connect("localhost", "root", "Quips321") or die(mysql_error());
mysql_select_db($Database) or die(mysql_error());
$insert = "INSERT INTO user (first_name, last_name, email, user_name, password)
	       VALUES ('$first_name', '$last_name', '$email', '$user_name', '$password')"; 
mysql_query($insert); 
?>