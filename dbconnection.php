<?php 
//db connection

$host = "localhost";
$user = "root";
$pw = "";
$dbname = "art_gallery";
mysql_connect($host,$user,$pw) or exit("connection error".mysqli_connect_error());
@mysql_select_db($dbname) or die( "Unable to select database");
?>