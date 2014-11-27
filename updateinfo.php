<?php 
include 'header.php';
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
   <li class = "active"><a href=\'index.php\'><span>Home</span></a></li>
   <li><a href=\'gallery.php\'><span>Gallery</span></a></li>
   <li><a href=\'aboutus.php\'><span>About</span></a></li>
   <li><a href=\'enquiryform.php\'><span>Contact</span></a></li>
   <li class=\'last\'><a href=\'registration.php\'><span>Join Us</span></a></li>
   <li>';
		
echo '</li>
</ul>
</div>
</body>
</html>
';

include 'passwordhandling.php';
include 'dateinfo.php';
include 'dbconnection.php';

$id = $_SESSION['user_id'];
$sql = "SELECT * FROM members WHERE member_id = '$id'";
$result = mysql_query($sql) or exit("SQL error ".mysql_error());


$row = mysql_fetch_array($result);

$ppicurl = $row['ppic_url'];
$prevdate = $row['DOB'];
	echo '
<html>
<head>
	<title>Update Your Information</title>
	<link rel="stylesheet" type="text/css" href="css.css">

</head>
<!-- USE JAVASCRIPT FOR ERROR HANDLING! -->
<body>
<h1>Member Registration</h1>
<form method="POST" enctype="multipart/form-data" action="update.php">
<table>';
	
	echo "
<tr>
	<td><div class=\"floats\" id = \"infopic\">
	<img class=\"floats\" src = '$ppicurl'>
	</div></td>
</tr>";

echo '
<tr>
	<td>Choose File:</td><td> <input type="file" name="image" id="file" class="fields" value="';
echo $row['ppic_url'];
echo '"></td>
</tr>
<td><label for="fname">First name: </label> <input class="fields" type="text" name="fname" value="';
echo $row['fname'];
echo '" required></td>
<td><label for="sname">Surname: </label> <input class="fields" type="text" name="sname" value="';
echo $row['sname'];

echo '"required></td>
<td><label for="oname">Other names: </label> <input class="fields" type="text" name="oname" value="';
echo $row['onames'];

echo '"required></td></td>
</tr>
<td><label for="nationalid" >National ID: </label> <input class="fields" type="text" name="nationalid" value="';
echo $row['national_id'];

echo '"required></td></td>
<td><label for="dob">Date: </label><input class="fields" type="date"  min = "1905-01-01" max="2000-01-01" value="'.$prevdate.'" min = "1905-01-01" max="2000-01-01" name="dob" value="';
echo $row['DOB'];

echo '"required></td></td>
</tr>
<tr>
<td><label for="email">Email: </label> <input class="fields" type="text" name="email" value="';
echo $row['email'];

echo '"required></td></td>
</tr>
<tr>
<td><label for="phone">Phone Number: </label> <input  class="fields" type="text" name="phone" value="';
echo $row['phone_no'];

echo '"required></td></td>
</tr>
<tr>
<td><label for="gender">Male</label><input type="radio" value="M" name="gender" required></td>
<td><label for="gender">Female</label><input type="radio" value="F" name="gender" required></td>
</tr>
<tr><td><input type="submit" value="Submit" name="submit" onclick="return matchcheck"></td></tr>
</table>
</form>
</body>
</html>
	';
	include 'footer.php';

 ?>