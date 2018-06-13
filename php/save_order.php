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
$product = $_POST['productname'];
$userName = $_POST['userName'];
$quantity2 = $_POST['quantity'];
$price2 =$_POST['price'];
$quantity = (int)$quantity2;
$price = (int)$price2;
$total = $_POST['total'];
$sql = "INSERT INTO orderRealSlim (productName,quantity,price,total,username) VALUES ('$product','$quantity','$price','$total','$userName')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
