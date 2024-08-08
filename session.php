<?php
//to tarck the no of times the user have visited this page
session_start();
if (!isset($_SESSION["count"])){
    $_SESSION["count"] = 1;

}
else{
    $_SESSION["count"]++ ;
}
?>
<p>Hello vistor ! you have visited this page!<?php echo $_SESSION["count"]; ?> times.<br />



    <!-- to  create and display the session variables -->

    <?php
$_SESSION['is_user_logged_in']= '1';
$_SESSION['logged_in_username']= 'ranju';

echo $_SESSION['is_user_logged_in'];
echo"<br/>";
echo $_SESSION['logged_in_username'];
?>