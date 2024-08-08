<?php
session_start();

include("connection.php");


  if (isset($_POST['Signup'])) {
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

  $sql = "INSERT INTO register ('fullname', 'password', 'address', 'email', 'phone')
   VALUES ('$fullname','$password','$address','$email','$phone')";
        $res = mysqli_query($conn,$sql)
 or die("Could not insert".mysqli_error());  

   
  // Close connection
  mysqli_close($conn);
  }
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Session</title>
</head>

<body>

    <form action="registration.php" method="POST">
        <label for="Fullname">Fullname</label>
        <input type="text" name="fullname" id="fullnames" placeholder="Enter your full name"><br><br>
        <label for="Password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
        <label for="Address">Address</label>
        <input type="text" name="address" id="address" placeholder="Ekantakuna,Lalitpur"><br><br>
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" placeholder="ranju@gmail.com"><br><br>
        <label for="Phone">Phone</label>
        <input type="number" name="phone" id="phone" placeholder="9871236890"><br><br>
        <button type="Submit" name="Signup">Signup</button><br>
        Already a member?<a href="login.php">Login</a>
    </form>
</body>

</html>