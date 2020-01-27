

<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

include('test.php')

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$price= $_POST['price'];
$material = $_POST['material'];

$stmt = $conn->prepare("INSERT INTO tbl_test (name, material, price) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $name, $material, $price);
$stmt->execute();


?>

