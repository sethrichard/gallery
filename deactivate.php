<?php 
include 'header.php';
include 'dbconnection.php';


$id = $_GET['mem_id'];

$sql1 = "SELECT * FROM members WHERE member_id = '$id'";
$result1 = mysql_query($sql1) or exit(mysql_error());
$row = mysql_fetch_array($result1);
$activestatus = $row['active'];

if ($activestatus == 0) {
	# code...
	$deactive = 1;
$sql = "UPDATE members SET active ='$deactive' WHERE member_id = '$id'";
$result = mysql_query($sql) or exit(mysql_error());
header("Location:membersdeactivated.php");
}
elseif ($activestatus ==  1) {
	# code...
		$active = 0;
$sql = "UPDATE members SET active ='$active' WHERE member_id = '$id'";
$result = mysql_query($sql) or exit(mysql_error());
header("Location:memberdatabase.php");

}



 ?>