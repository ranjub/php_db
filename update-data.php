<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error connecting to database". $conn->connect_error);
}
 echo "connection successfull";
 $sql = "UPDATE users SET name ='Ranju' Where ID = 01";

 if($conn->query($sql)==TRUE) {
    echo "Data updated successfully";
}
else {
    echo "Failed". $conn->connect_error;
    
}
$conn->close() ;
?>


