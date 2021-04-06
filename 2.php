<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create Conn
$conn = mysqli_connect($servername, $username, $password);

// Check Conn
if (!$conn) {
  die("Connection Failed : ".mysqli_connect_error());
}

// Create DB
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database : ". mysqli_error($conn);
}

mysqli_close($conn);
?>