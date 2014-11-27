<?php 
require_once "dbconnection.php";
$creds = $_SESSION['user_id'];
$sql = "SELECT * FROM members WHERE member_id = '$creds'";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

$row = mysql_fetch_array($result);
$mem_id = $row['fname'];
$_SESSION['firstname'] = $mem_id;
 ?>