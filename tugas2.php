<html>
<head>
  <title>BUKU TAMU</title>
</head>
<body>
  <h1 align = "center">BUKU TAMU</h1>
  <p align = "center">Silakan Mengisi Buku Tamu dibawah</p>
  <form method="post" action="submit.php">
    <table align="center" cellpadding="2" cellspacing="2">
      <tr>
        <td width="130">Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td width="130">Email</td>
        <td>:</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td width="130">Isi</td>
        <td>:</td>
        <td><textarea name="isi" cols="22"></textarea></td>
      </tr>
      <tr>
        <td>
        </td>
        <td></td>
        <td>
          <input type="submit" value="Submit" name="submit">
          <input type="reset" value="Reset" name="reset">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>