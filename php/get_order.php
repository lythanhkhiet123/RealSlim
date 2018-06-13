<?php
header('Access-Control-Allow-Origin: *');
$servername ="localhost";
$username="id5546743_lythanhkhiet123";
$password="khietandhow123";
$dbname="id5546743_testing";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$email = $_POST['user'];
$pass = $_POST['pass'];


$sql = "SELECT * FROM User WHERE email = '$email' AND password = '$pass'" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["email"];
       
    }
} else {
    echo "Log in failed";
}


$conn->close();

?>
