<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
echo"Connection Successful";
$sql = "CREATE TABLE users(
    ID INT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL
    )";

    if($conn->query($sql)==TRUE) {
        echo "Table created successfully";
    }
    else {
        echo "Failed to create table". $conn->connect_error;
    }
    $conn->close() ;
    ?>

