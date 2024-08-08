<?php
$conn = mysqli_connect("localhost", "root", "", "session");
         
         // Check connection
         if($conn === false){
             die("ERROR: Could not connect. "
                 . mysqli_connect_error());
         }
         echo"Connection Successful";
         ?>