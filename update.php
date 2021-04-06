<?php
$servername = "localhost"; // Host server
$username = "root"; // User Login phpmyadmin
$password = ""; // pass login
$dbname = "dbbuku_tamu"; // Nama Database
$koneksi = mysqli_connect($servername, $username, $password, $dbname) or die ("Koneksi Gagal");

// Query untuk Update data
$sql = "UPDATE bukutamu SET NAMA = 'Indy Millenio' WHERE id_bt = 7";

// Melakukan Cek apakah data dapat di update
if (mysqli_query($koneksi, $sql)) {
  echo "Update Successfully";
} else {
  echo "Error : " .$sql. "<br>" .mysqli_error($koneksi);
}

?>