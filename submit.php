<?php

include "konek.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

$sql  = "INSERT INTO bukutamu (nama, email, isi) VALUES ('$nama', '$email', '$isi')";
mysqli_query($koneksi, $sql) or die ("Koneksi Failed");
?>