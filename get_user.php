<?php

$servername ="localhost";
$username="id5546743_lythanhkhiet123";
$password="khietandhow123";
$dbname="id5546743_testing";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$email = $_POST['email'];
$pass = $_POST['psw'];


$sql = "SELECT * FROM User WHERE email = '$email' AND password = '$pass'" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["email"]. " " . $row["password"] . "<br>";
        echo "Log in successfully";
    }
} else {
    echo "0 results";
    echo "Log in failed";
}

echo "<a href=\"javascript:history.go(-1)\" >Click here to go back</a>";

$conn->close();

?>
