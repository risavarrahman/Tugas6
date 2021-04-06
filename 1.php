<html>
  <head>
    <title>Koneksi Database MySQL</title>
  </head>
  <body>
    <h1>DEMO KONEKSI DATABASE MYSQL</h1>
    <?php

    $con = mysqli_connect("localhost","root","","myDB");

    // Check Connection
    if (mysqli_connect_error()) {
      echo "Failed to Connect MySQL" . mysqli_connect_error();
    }

    ?>
  </body>
</html>