<?php
$servername = "localhost"; // Host Server
$username = "root"; // User Login phpmyadmin
$password = ""; // pass Login
$dbname = "dbbuku_tamu"; // Nama Database
$koneksi = mysqli_connect($servername, $username, $password, $dbname) or die ("Koneksi Gagal");

// Query untuk Delete data
$sql = "DELETE FROM bukutamu WHERE id_bt = 16";

// Melakukan Cek apakah data dapat di delete
if (mysqli_query($koneksi, $sql)) {
  echo "Delete Successfully";
} else {
  echo "Error : " .$sql. "<br>" .mysqli_error($koneksi);
}

?>