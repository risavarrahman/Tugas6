<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('JER', 'Jerman', '4'),
('SPA', 'Spanyol', '3'),
('ENG', 'England', '3')";

if (mysqli_query($conn, $sql)) {
  echo "New Record Created Successfully";
} else {
  echo "Error : " .$sql. "<br>" . mysqli_error($conn);
}

?>