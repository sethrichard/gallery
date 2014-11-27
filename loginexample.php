<?php
include 'dbconnection.php';
$pwd = $_POST['passwd'];//fields
$user = $_POST['username'];//fields

$notallowed = array('~','`','!','@','#','$','%','^','&','*','(',')','_','-','+','=','{','}','[',']','<','>','.',',','/','?','\n','\r','\t','\\','|',' ');
//searches for not allowed values in pwd and replaces with ""
$pwd = str_replace($notallowed, "", $pwd);
$user = str_replace($notallowed, "", $user);

$pwd = strip_tags($pwd);
$user = strip_tags($user);

$pwd = md5($pwd);

$strSQL = "SELECT `member_id` FROM `password` WHERE `member_id` LIKE '$user' AND `password` LIKE '$pwd';";
//FULL HTML PAGE IN AN ERROR MESSAGE HAHAHAHAHAHA!!!
$result = mysql_query($strSQL, $conn) or exit("<html><head><title>:: Login System :: Login Error</title><link rel='stylesheet' type='text/css' href=''></head><body><br /><br /><table align='center'><tr align='center'><td><br />&nbsp;Error during Login process.&nbsp;<br /><br />&nbsp;<a href='./'>Please try again</a>&nbsp;<br /><br /></td></tr></table></body></html>");

$numrows = mysql_num_rows($result);

//echo $numrows;

if($numrows == 1):
	//set session

	$id = md5($pwd.$user);

	//ini_set('session.cookie_lifetime', 1200);  // in seconds
	session_start();
	$_SESSION['id'] = $id; // Put the value you want in that session variable
	$_SESSION['usr'] = $user; // Put the value you want in this session variable

	$strSQL = "UPDATE `login_tbl` SET `lastlogin` = 'NOW()' WHERE `username` LIKE '$user' AND `password` LIKE '$pwd';";
	$rlt = @mysql_query($strSQL, $conn);
	
	$msg = "User Login Success - ";

	dbClose($conn);
	header('Location: index.php');
else:
	$msg = "User Login Failed - ";
	
	exit("<html><head><title>:: Login Support :: Login Error</title><link rel='stylesheet' type='text/css' href='css/template.css'></head><body><br /><br /><table align='center'><tr align='center'><td><br />&nbsp;Error during Login process.&nbsp;<br /><br />&nbsp;<a href='./'>Please try again</a>&nbsp;<br /><br /></td></tr></table></body></html>");
endif;

?>
