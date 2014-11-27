<?php 
session_start();
$_SESSION["loginstatus"] = 0;
$ID = $_SESSION['lastid'];
include 'dbconnection.php';
$last = $_POST["pass"];

$sql = "INSERT INTO `password` (`password`,`member_id`) VALUES ('$last','$ID')";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

$_SESSION['loggedin'] = $_SESSION['lastid'];
echo "The last id is ".$ID. "<br>";
echo $_SESSION["loggedin"]."<br>";
echo "Password = ".$last."<br>";
$_SESSION['wrongpassword'] = 2;
 include 'logs.php';
$_SESSION['user_id'] = $_SESSION['lastid'];
include 'getname.php';
 header("Location:index.php")
 
 ?>