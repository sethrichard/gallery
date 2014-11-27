<?php 

include 'dbconnection.php';
include 'header';
$approved = 3;
$id=$_GET['item_id'];

$sql = "UPDATE items SET approved_status='$approved' WHERE approved_status = 2";
$result = mysql_query($sql) or exit(mysql_error());

header("Location:unnaproved.php")
 ?>