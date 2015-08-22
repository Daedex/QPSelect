<?php
header('Location: http://localhost/quips/');
//connect to database
$db_host = 'daedex.com'; 
$db_user = 'stauguu1_admin';
$db_pwd = 'Quips123'; 
$database = "stauguu1_quips";
mysql_connect($db_host, $db_user, $db_pwd) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

// check if user exists, if TRUE then check for correct username and password
$check = mysql_query("SELECT * FROM user WHERE user_name = '".$_POST['user_name']."'")or die(mysql_error());
$check2 = mysql_query("SELECT * FROM user WHERE user_name = '".$_POST['user_name']."' AND password = '".$_POST['password']."'"); 
if (mysql_num_rows($check) != 1){
	echo "User does not exist in our database";
} elseif (mysql_num_rows($check2) != 0) {
	header('Location: http://localhost/quips/quips.php'); 
} else {
	die("Invalid username or password"); 
}
?>
