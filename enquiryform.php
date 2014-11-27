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
   <li class = "active"><a href=\'enquiryform.php\'><span>Contact</span></a></li>
   <li class=\'last\'><a href=\'registration.php\'><span>Join Us</span></a></li>
   <li>';

	echo '	</li>
</ul>
</div>
</body>
</html>
';

include 'passwordhandling.php';
include 'dateinfo.php';
?>
<html>
<head>
	<title>Enquiries</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<h1>Enquiries</h1>

<form method="POST" action="enquiries.php" name="regform" onsubmit="return validateForm();">
<table>
<tr>
<td><input required type="text" name="email" class = "fields" placeholder = "Enter you email here"></td>
</tr>
<tr>
<td><textarea required name="description" rows="4" cols="50" class="textareas" placeholder = "Enter your enquiry here"></textarea></td>
</tr>
<tr>
<td><input type="submit" value="Send Enquiry"></td>
</tr>
</table>
</form>

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

 <?php
include 'footer.php';
 ?>
</body>

</html>