<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Create Conn
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Select Sql
    $sql = "SELECT kode, negara, champion FROM liga";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "kode : " .$row["kode"]. " - Negara " .$row["negara"]. " " .$row["champion"]. "<br>";
        
      }
    } else {
      echo "0 results";
    }
    mysqli_close($conn);
    ?>
  </body>
</html>