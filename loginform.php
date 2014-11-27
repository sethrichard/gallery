
<?php 

if (isset($_SESSION['user_id'])) {
# code...
	// change and say welcome to user
	//this session variable can be used to verify login on 
	//all pages 
	include 'getname.php';
	include 'logs.php';
	echo "<div id = \"login\">";
	echo "<table>
			<tr>
	";
	echo "<td>Welcome ".$_SESSION['firstname']."</td>";
	// TABLE echo()
	// script echo "";
echo '<td><form action = "logout.php" method="POST" onsubmit="return validateForm();">
			<input type="submit" value="Log Out" name="logout">
			</form></td>';
	echo "
	</table>
	</div>";
}	
else{
	// bring up login form
	echo "
	<div id = \"login\">
<form method='POST' action='login.php'>
	<table>
		<tr>
			<td><label>User Name: </label></td>
			<td><input type='text' class='textfields' name='user_name' class='fields' required></td>
			<td><label>Password: </label></td>
			<td><input type='password' class='textfields' name= 'pwd' class='fields' required></td>			<td><input type='submit' value='Log In'><td>
		</tr>
	</table>
</form>
</div>
	";
	$_SESSION['redirect']=$_SERVER['PHP_SELF'];

}

 //$current_file = $_SERVER['SCRIPT_NAME'];
 //echo $current_file;
 ?>