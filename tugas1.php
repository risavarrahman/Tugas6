<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbbuku_tamu";

// Create Conn
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Conn
// if (!$conn) {
//   die("Connection Failed : " .mysqli_connect_error());
// }

// Create DB
// $sql = "CREATE DATABASE dbbuku_tamu";

// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database : ". mysqli_error($conn);
// }

// Create Table
$sql = "CREATE TABLE bukutamu (
  id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  nama VARCHAR(200) NOT NULL, 
  email VARCHAR(50) NOT NULL, 
  isi TEXT)";

if (mysqli_query($conn, $sql)) {
  echo "Table Created Successfully";
} else {
  echo "Error creating Table : " .$sql. "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>