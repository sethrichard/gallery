<?php 

include 'dbconnection.php';
include 'header';
$approved = 2;
$id=$_GET['request_id'];

$sql = "UPDATE requests SET accept='$approved' WHERE (request_id = '$id')";
$result = mysql_query($sql) or exit(mysql_error());
header("Location:requestreport.php")
 ?>