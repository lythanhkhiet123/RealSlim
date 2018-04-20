<!DOCTYPE html>
<html>
  <body>
    <h1>
      My First Heading
    </h1>
    <p>
      My first paragraph
    </p>
      
    <?php
      
      
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname ="testing";
    
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      } else{
        echo "Connected successfully";
      }
    
    $sql = "INSERT INTO `testing`.`user` (`id`, `username`, `password`) VALUES ('0', 'cindy', 'ng');";
    //$sql = "UPDATE table1 SET firstname='cindy',lastname='ly' WHERE id=2";
    //$sql = "SELECT firstname, lastname FROM table1";
    //mysqli_query($conn, $sql)
$result = $conn->query($sql);
  

$conn->close();
      
    ?>
  </body>
</html>