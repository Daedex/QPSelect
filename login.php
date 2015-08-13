<?php
//header('Location: http://localhost/quips/quips.html');
//connect to database
$Database = "quips";
mysql_connect("localhost", "root", "Quips123") or die(mysql_error());
mysql_select_db($Database) or die(mysql_error());

// check if user exists
$check = mysql_query("SELECT * FROM user WHERE user_name = '".$_POST['user_name']."'")or die(mysql_error());
$check2 = mysql_num_rows($check); 
if ($check2 != 1){
	echo "User does not exist in our database";
}else{
	header('Location: http://localhost/quips/quips.html'); 
}







/* **Script to add a new user to the database**
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

*/
?>
