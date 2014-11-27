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
   <li class = "active" ><a href=\'gallery.php\'><span>Gallery</span></a></li>
   <li><a href=\'aboutus.php\'><span>About</span></a></li>
   <li><a href=\'enquiryform.php\'><span>Contact</span></a></li>
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
include 'dbconnection.php';


$item_id = $_GET['item_id'];

$sql = "SELECT * FROM items WHERE item_id ='$item_id'";
$result = mysql_query($sql) or exit(mysql_error());

$row = mysql_fetch_array($result);
$item_name = $row['item_name'];
echo $item_name;
include 'mailscript.php';
echo '
 <form method = "POST"  onsubmit="return validateForm();" name ="contactform" action = "contact.php">
 	<table>
 		<tr><td>Item name: </td><td><input type="text" disabled name="item_id" value="'.$item_name.'"></td></tr>
 			<tr>
 			<td>Your email:</td><td><input class="fields" type="text" name="email" value="" required></td>
			</tr>
			<tr>
			<td><input type="hidden" name = "item_id" value = "'.$item_id.'"></td>
			</tr>
 			<tr>
 			<td>Select purchase: </td>
 			<td><select name = "purchase" required>
 			<option value="" disabled selected>Select form of purchase</option>
			<option value="buy">Buy Item</option>
			<option value = "hire">Hire Services</option>
 			</select></td>
 		</tr>
 		<tr>
 		<td>Enter details: </td><td><textarea rows="5" cols="35" class="textareas" name="description" placeholder= "Enter item description" required></textarea></td>
 		</tr>
 		<tr>
 		<td><input type="submit" value = "Send Request"></td>
 		</tr>

 	</table>
 </form>';
 include 'footer.php';
 ?>
