<?php
$ranju="localhost";
$username= "root";
$password= "";

$conn = new mysqli($ranju, $username, $password);

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
else{
echo"Connection Successful";
}
$sql = "CREATE DATABASE mydb2";
if($conn->query($sql)==TRUE) {
    echo "Database created successfully";
}
else {
    echo "Failed to create database". $conn->connect_error;

}
$conn->close() ;
 ?>