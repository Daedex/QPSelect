<?php

DEFINE ('DB_USER', 'stauguu1_admin');
DEFINE ('DB_PASSWORD', 'Quips123');
DEFINE ('DB_HOST', 'daedex.com');
DEFINE ('DB_NAME', 'stauguu1_quips');

function db_connect(){
	$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if(!$link){
	 die('Could not connect ' . mysqli_connect_error()); 
	}
}

function db_disconnect($link){
	mysql_close($link); 
}

?>