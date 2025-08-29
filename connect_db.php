<?php
$servername = "localhost";
$username = "sirichot";
$password = "Ss301248@";
$db = "sirichot";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>