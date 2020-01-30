<?php 


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

include('utils.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = (int)$_POST['id'];

$sql = "SELECT id, name, price 
        FROM tbl_products 
        WHERE id=$id"  ;

$result = $conn->query($sql);
while  ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

if ($result->num_rows > 0) {
    
} else {
    echo "0 results";
}
$conn->close();


echo json_encode($data);

?>