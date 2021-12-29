<?php
//DATABASE CONNECTION for display_note.php
$host = "localhost";
$username = "root";
$password = "";
$database = "database";

$sql = mysqli_connect($host, $username, $password, $database) or die('Could not connect');

?>