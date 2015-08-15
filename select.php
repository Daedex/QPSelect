<?php
$unit_tag = mysql_real_escape_string($_POST["unit_tag"]);
$air_vol = mysql_real_escape_string($_POST["air"]);
$total_static_press = mysql_real_escape_string($_POST["total"]);
$voltage = mysql_real_escape_string($_POST["volta"]);
$unit_height = mysql_real_escape_string($_POST["unit_height"]);
$unit_weight = mysql_real_escape_string($_POST["unit_weight"]);
$Database = "quips";
mysql_connect("localhost", "root", "Quips321") or die(mysql_error());
mysql_select_db($Database) or die(mysql_error());
$insert = "INSERT INTO selections (unit_tag, air_vol, total_static_press, voltage, unit_height, unit_weight)
	       VALUES ('$unit_tag', '$air_vol', '$total_static_press', '$vol', '$unit_height', '$unit_weight')"; 
mysql_query($insert); 
?>