<?php 
include 'dbconnection.php';
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM members WHERE member_id = '$id'";
$result = mysql_query($sql) or exit("SQL error ".mysql_error());

$row = mysql_fetch_array($result);
$authority = $row['authority'];
$_SESSION['authority'] = $authority;
 ?>