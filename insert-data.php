<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error connecting to database". $conn->connect_error);
}
$sql = "INSERT INTO users(ID,name,email)
 VALUES(01,'Ram','ram@gmail.com')
";
if($conn->query($sql)==TRUE) {
    echo "Data inserted successfully";
}
else {
    echo "Failed". $conn->connect_error;
    
}
$conn->close() ;
?>