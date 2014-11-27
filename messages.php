<?php 

include 'header.php';
include 'dbconnection.php';
echo '
<html>
<head>
	<title></title>
</head>
<body>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="selfmade.css">
	<script type="text/javascript">
$(\'#cssmenu\').prepend(\'<div id="menu-button">Menu</div>\');
	$(\'#cssmenu #menu-button\').on(\'click\', function(){
		var menu = $(this).next(\'ul\');
		if (menu.hasClass(\'open\')) {
			menu.removeClass(\'open\');
		}
		else {
			menu.addClass(\'open\');
		}
	});
	</script>
	</head>
<body>
<div id=\'cssmenu\'>
<ul>
   <li ><a href=\'index.php\'><span>Home</span></a></li>
   <li class = "active"><a href=\'gallery.php\'><span>Gallery</span></a></li>
   <li><a href=\'aboutus.php\'><span>About</span></a></li>
   <li><a href=\'enquiryform.php\'><span>Contact</span></a></li>
   <li class=\'last\'><a href=\'registration.php\'><span>Join Us</span></a></li>
   <li>';
  include "loginform.php";			
echo '</li>
</ul>
</div>
</body>
</html>
';
echo '<link rel="stylesheet" type="text/css" href="css.css">';

include 'passwordhandling.php';
include 'dateinfo.php';

$sender=$_SESSION['user_id'];

// message retrieval
$sql = "SELECT * FROM messages WHERE member_id = '$sender'";
$result = mysql_query($sql) or exit(mysql_error());
$row = mysql_fetch_array($result);
$msg = $row['message'];
$msgdate=$row['message_date'];
$msgtime = $row['message_time'];

// message retrieval

echo '
<div id = "messagebar">
<table>
';
if ((mysql_fetch_array($result))) {
	# code...
	echo '<tr>
	<td>You do not have any messages</td>
	</tr>';
}
else{
echo '

<tr>
<td>'.$msgtime.'<td>ph
<td>'.$msgdate.
'
</tr>

<tr>
<td>'.$msg.'
</tr>
</table>
';
}
echo'
<form method = "POST" action = "messagesend.php">
<table>
<tr>
<td><input type = "text" name="msg" placeholder = "type text here">
	<input type = "submit" value = "Send">
</td>

</tr>
</table>
</form>';

echo '
</div>
';




 ?>