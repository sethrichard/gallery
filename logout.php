<?php 
session_start();
// unset($_SESSION['user_id']);
mysql_close();
session_destroy();
header("Location: index.php");

 ?>