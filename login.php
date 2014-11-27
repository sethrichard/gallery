<?php
ob_start();
session_start();
require_once 'dbconnection.php';
$creds =$_POST["user_name"];
$pas =$_POST["pwd"];
//assigns global credentials value from form
$_SESSION['credentials'] = $_POST['user_name'];


// echo "$creds"."<br>";
$sqll = "SELECT * FROM members WHERE email = '$creds'";
$results = mysql_query($sqll) or exit ("SQLquerry error".mysql_error());
$rows = mysql_fetch_array($results);
$identification = $rows['member_id'];
$active = $rows['active'];

if ($active == 1) {
	# code...
		$invalid = 4;
	$_SESSION['wrongpassword'] = $invalid;
	session_destroy();
	$redirect = $_SESSION['redirect'];
	header('Location:'.$redirect);

}

elseif ($active == 0) {
	# code...

$_SESSION['loginid'] = $identification;



$sql = "SELECT * FROM password WHERE member_id = '$identification'";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
//gets column from db
$row = mysql_fetch_array($result);
//assigns column value to $pass variable

$pass = $row['password'];
$mem_id = $row['member_id'];//member id

// echo $pass;

if ($pas != $pass){
	# code...
	$invalid = 1;
	$_SESSION['wrongpassword'] = $invalid;
	$redirect = $_SESSION['redirect'];
	header('Location:'.$redirect);
}
else{
	$_SESSION['user_id'] = $mem_id;
	// setting id before variable goes to get authority
	include 'getauthority.php';
	$authority = $_SESSION['authority'];
	if ($authority == 1) {
			# code...
		$_SESSION['wrongpassword'] = 3;
		
		header('Location:adminpanel.php');
		}	
		else{
	// echo "You have succesfully logged in";
	$_SESSION['wrongpassword'] = 2;

	$redirect = $_SESSION['redirect'];
	header('Location:'.$redirect);
		}
	}
}
?>
