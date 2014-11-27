<?php 
session_start();
include 'dbconnection.php';
$date = date('d-m-y');

$time = date('h:i:s A');
echo "$date"."<br>". "$time";
//ORIGINAL d for date S for 5'th',m month Y yr A for pm/am
// echo date('d S \of m Y h:i:s A');
$ID = $_SESSION['loggedin'];

$sql = "INSERT INTO `logs`(`member_id`,`date`,`time`) VALUES('$ID','$date','$time')";
$result = mysql_query($sql) or exit(mysql_error());

echo "SUCCESS in logging!";
 ?>