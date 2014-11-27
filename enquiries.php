<?php 
include "dbconnection.php";
$date = date('d-m-y');
$mail = $_POST["email"];
$desc = $_POST["description"];
$time = date('h:i:s a');
$sql  = "INSERT INTO enquiries(enq_date,enq_time,enq_desc,enq_email) VALUES ('$date','$time','$desc','$mail')";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
	header("Location:index.php");
 ?>