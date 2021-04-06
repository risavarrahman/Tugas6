<?php

  include "tugas2.php";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbbuku_tamu";
  $koneksi = mysqli_connect($servername, $username, $password, $dbname) or die ("Koneksi Gagal");

  mysqli_select_db($koneksi, $dbname) or die(mysqli_error());
?>