<?php 

include 'dbconnection.php';
include 'header';
$approved = 0;
$id=$_GET['item_id'];

$sql = "UPDATE items SET approved_status='$approved' WHERE (item_id = '$id')";
$result = mysql_query($sql) or exit(mysql_error());
header("Location:unnaproved.php")
 ?>