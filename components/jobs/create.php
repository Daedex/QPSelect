<?php

header('Location: http://localhost/quips/quips.php');

$new_job = mysql_real_escape_string($_POST["new_job"]);

require_once('mysqli_connect.php');

$query = "INSERT INTO jobs (job_name) VALUES (?)";

$stmt = mysqli_prepare($dbc, $query);

mysqli_stmt_bind_param($stmt, "s", $new_job);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);

mysqli_close($dbc);

?>