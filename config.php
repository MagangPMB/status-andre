<?php
$servername = "localhost";
$username = "root";
$password = "";
$databases = "db_status";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databases);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>