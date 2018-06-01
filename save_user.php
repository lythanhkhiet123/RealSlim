
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
$sql = "INSERT INTO User (email, password)
VALUES ('$email','$pass' )";
$sql2 = "SELECT * FROM User";
$result = $conn->query($sql2);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["email"]. " " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
