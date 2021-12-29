<?php
$notes = filter_input(INPUT_POST, 'notes');//input from input_note.php will go here
if (!empty($notes)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "database";
// create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

//validation if database does not connect 
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
//go here if database can connect
else{
$sql = "INSERT INTO tbl_notes (notes) values ('$notes')"; //insert input into database

//validation if there's input entered from user
if ($conn->query($sql)){
// directly return to homepage if input inserted to database
header("Location: http://localhost/memo/index.php");
exit();
}
else{
echo "Error: ". $sql ."". $conn->error;
}
$conn->close();
}
}
//if no input from user, this code will be execute
else{
// directly go to another page. display error message and button to return back to homepage
header("Location: http://localhost/memo/error.php");
die();
}
?>
