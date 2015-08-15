<?php
header('Location: http://localhost/quips/');
//connect to database
$Database = "quips";
mysql_connect("localhost", "root", "Quips123") or die(mysql_error());
mysql_select_db($Database) or die(mysql_error());

// check if user exists, if TRUE then check for correct username and password
$check = mysql_query("SELECT * FROM user WHERE user_name = '".$_POST['user_name']."'")or die(mysql_error());
$check2 = mysql_query("SELECT * FROM user WHERE user_name = '".$_POST['user_name']."' AND password = '".$_POST['password']."'"); 
if (mysql_num_rows($check) != 1){
	echo "User does not exist in our database";
} elseif (mysql_num_rows($check2) != 0) {
	header('Location: http://localhost/quips/quips.html'); 
} else {
	die("Invalid username or password"); 
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
