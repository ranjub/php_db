<?php
session_start();

include("connection.php");
if (isset($_POST['Login'])) {
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

$sql = "SELECT * FROM register WHERE fullname='$fullname' AND password='$password'";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)===1) {
$row = mysqli_fetch_array($res);
if($row["fullname"]==$fullname &&["password"]==$password) {
    Echo "Logged in";
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['password'] = $row['password'];
    exit() ;
}
}
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

    <form action="login.php" method="POST">
        <label for="Fullname">Fullname</label>
        <input type="text" name="fullname" id="fullname" placeholder="Enter your full name"><br><br>
        <label for="Password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
        <button type="Submit" name="Login">Login</button><br>
        Not a member?<a href="registration.php">Signup</a>
    </form>
</body>

</html>