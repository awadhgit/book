<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database="book";

// Create connection
$dbcon= mysqli_connect($servername, $username, $password,$database);

//Check connection
if ($dbcon->connect_error) {
  die("Connection failed: " . $dbcon->connect_error);
}
"Connected successfully";

?>
