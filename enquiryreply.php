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

$enq_id = $_GET['id'];

echo '
 <form method="POST" action="replytoforum.php">
 	<table>
 
 		<tr>
 			<td>Reply:</td><td><textarea required name="message" rows="4" cols="30" class="textareas" placeholder = "Enter your reply here"></textarea>
 			</td>
 		</tr>
 		<tr>
 		<td><input type = "hidden" name = "enquiryid" value = "'.$enq_id.'"></td>
 		</tr>
 		<tr>
 		</td><td>
 		<td><input type="submit" value="Send Reply"></td>
 		</tr>
 	</table>
 </form>
';
include 'footer.php';

 ?>
