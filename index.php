<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, price, material, description
        FROM tbl_products 
        WHERE status=1
        LIMIT 20";
$result = $conn->query($sql);


while  ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

if ($result->num_rows > 0) {
    
} else {
    echo "0 results";
}
$conn->close();
write_to_log("Products", $data); 

// var_dump($data);die;

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

        <div class="jumbotron text-center">



        </div>

        <div class="container">
        <?php
        for ($i = 0; $i <count($data); $i++) {
            echo "<div class='card' >
                    <a href='product.php?id=".$data[$i]["id"]."&material=".$data[$i]["material"]."'>
                        <p>" .$data[$i]["name"]. "</p>
                    </a>
                </div>" ;
        }
        ?>
        </div>

    </body>
</html>



