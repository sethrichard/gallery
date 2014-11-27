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
   <li ><a href=\'index.php\'><span>Home</span></a></li>
   <li ><a href=\'gallery.php\'><span>Gallery</span></a></li>
   <li><a href=\'aboutus.php\'><span>About</span></a></li>
   <li><a href=\'enquiryform.php\'><span>Contact</span></a></li>
   <li class=\'last active\'><a href=\'registration.php\'><span>Join Us</span></a></li>
   <li>';

	echo '	</li>
</ul>
</div>
</body>
</html>
';


if (isset($_SESSION['user_id'])) {
	# code...
	echo "<p>You are already a member. Log Out in order to register another member. </p>";
}
else{
	echo '
<html>
<head>
	<title>Member Registration</title>
	<link rel="stylesheet" type="text/css" href="css.css">

</head>
<!-- USE JAVASCRIPT FOR ERROR HANDLING! -->
<body>
<h1>Member Registration</h1>
<form method="POST" enctype="multipart/form-data" action="register.php" name="regform" onsubmit="return validateForm();">
<table>
<tr>
<td><label for="fname">First name: </label> <input class="fields" pattern="[A-Za-z]+" title="Enter letters only" type="text"  name="fname" value="" required></td>
<td><label for="sname">Surname: </label> <input class="fields" type="text" name="sname"pattern="[A-Za-z]+" title="Enter letters only" value="" required></td>
<td><label for="oname">Other names: </label> <input class="fields" type="text "pattern="[A-Za-z]+" title="Enter letters only" name="oname" value="" required></td>
</tr>
<tr><td>Choose Profile Picture:</td><td> <input type="file" name="image" id="file" class="fields"></td></tr>
<tr>
<td><label for="nationalid" >National ID: </label> <input class="fields" pattern="[0-9]{8}" title="Please enter 8 digits only" type="text" name="nationalid" value="" required></td>
<td><label for="dob">Date: </label><input class="fields" type="date" name="dob" value="1996-01-01" min = "1905-01-01" max="2000-01-01" required></td>
</tr>
<tr>
<td><label for="email">Email: </label> <input class="fields" type="text" name="email" value="" required></td>
</tr>
<tr width = "90">
<td><label for="phone">Phone Number: </label> <input  class="fields" type="text" pattern="+[0-9]{13}" placeholder = "+(code) xxx xxx xxx " name="phone" title="Enter only 13 digits(inclusive of the +)" required></td>
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
};
include 'footer.php';
?>
 <html>
 <script type="text/javascript">

	function validateForm()
{
var x=document.forms["regform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
 </script>
 </html>