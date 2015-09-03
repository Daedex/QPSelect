<?php

/*
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'Quips123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'quips');
*/

DEFINE ('DB_USER', 'stauguu1_admin');
DEFINE ('DB_PASSWORD', 'Quips123');
DEFINE ('DB_HOST', 'daedex.com');
DEFINE ('DB_NAME', 'stauguu1_quips');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error());

?>
