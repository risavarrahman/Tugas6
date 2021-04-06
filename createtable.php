<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE liga (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  kode VARCHAR(3) NOT NULL, 
  negara VARCHAR(30) NOT NULL,
  champion INT(3))";

if (mysqli_query($conn, $sql)) {
  echo "New Table Created Successfully";
} else {
  echo "Error : " .$sql. "<br>". mysqli_error($conn);
}

?>