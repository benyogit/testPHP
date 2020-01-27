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
$id = (int)$_GET['id'];

$sql = "SELECT id, name, price, material, description
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

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <style>
        .card{
            border:1px solid black;
            width:400px; 
        }
    </style>
    <script>

    </script>
    </head>
    <body>

       

        <div class="container">

           <form action="functions.php" method="post">
                Name: <input type="text" name="name"><br>
                Price: <input type="hidden" name="price" value="5.55"><br>
                Material : <input type="text" name="material"><br>

                <input type="submit">
           </form>
        
        </div>

    </body>
</html>