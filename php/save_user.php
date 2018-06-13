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
$username = $_POST['user'];

$pass = $_POST['password'];
$sql = "INSERT INTO User (email, password)
VALUES ('$username','$pass' )";
echo "Hello";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
