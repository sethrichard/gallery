<?php 
include "dbconnection.php";
$date = date('d-m-y');
$time = date('h:i:s a');
$id = $_POST["enquiryid"];
$desc = $_POST["message"];

$sql  = "INSERT INTO outbox(enquiry_id,message,message_date,message_time) VALUES ('$id','$desc','$date','$time')";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

header("Location:forum.php");
 ?>