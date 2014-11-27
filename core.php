<?php 
$current_file = $_SERVER['SCRIPT_NAME'];
//SHOWS THE PATH OF THE OPENED FILE
 
//CHECKING IF LOGGED IN
//set this if the user has logged in succesfully
// $user_id = mysql_result($result,0, 'id');
// $_SESSION['user_id'] = $user_id;
// header('Location: index.php');

// // ON THE INDEX PAGE
// if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
// 	# code...
// 	// change and say welcome to user
// 	//this session variable can be used to verify login on 
// 	//all pages 
	
// }	
// else{
// 	// bring up login form
// }

echo "$current_file";
 ?>


