<?php  

$servername = "localhost";
$username = "root";
$password = "root";
echo "string";
// Create connection
$dbcon = new mysqli($servername, $username, $password);
mysqli_select_db($dbcon,"users");  

// Check connection
if ($dbcon->connect_error) {
  die("Connection failed: " . $dbcon->connect_error);
}
echo "Connected successfully";
?> 