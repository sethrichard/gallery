<?php 
$valid = $_SESSION['wrongpassword'];



if (!isset($valid)){
	echo '
<div id = "loginwarning" >
	Not a member? Click on Join Us and become part of the revolution! ';
include "loginform.php";
echo '
</div>
	';
	
}
elseif ($valid == 1) {
	# code...
	echo '
<div id = "loginwarning" >
<p>You have either entered an invalid user name or password. Try again'.$invalid.'</p>';
include "loginform.php";
echo '
</div>
	';
}
elseif($valid == 2) {
	# code...
	$karibu = $_SESSION['firstname'];
		echo '<link rel="stylesheet" type="text/css" href="css.css">';
	echo '
<div id = "loginwarning" >
<p>You are logged in as '.$karibu.'</p>';
include "loginform.php";
echo '
</div>
	';
}

elseif ($valid == 3) {
	# code...
	$karibu = $_SESSION['firstname'];
	echo '<link rel="stylesheet" type="text/css" href="css.css">';
	echo '
<div id = "loginwarning" >
<p>Welcome Admin. You are logged in as '.$karibu.'</p>
';
include "loginform.php";
echo '
</div>
	';
}
elseif ($valid == 4) {
	# code...
		echo '
<div id = "loginwarning" >
<p>Your account has been deactivated. Email the Administrator or make an enquiry'.$invalid.'</p>';
include "loginform.php";
echo '
</div>
	';
}


 ?>
