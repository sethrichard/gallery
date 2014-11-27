<?php 
include "dbconnection.php";
$date = date('d-m-y');
$mail = $_POST["email"];
$desc = $_POST["description"];
$id = $_POST["item_id"];
$purchase = $_POST["purchase"];
$time = date('h:i:s a');
$sql  = "INSERT INTO requests(req_date,req_time,description,sender_email,item_id,purchase) VALUES ('$date','$time','$desc','$mail','$id','$purchase')";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
	header("Location:gallery.php")
 ?>