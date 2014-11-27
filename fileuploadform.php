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

?>

<html>
<head>
	<title>File Upload</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1>File Upload</h1>
<form method="POST" action="fileupload.php" enctype="multipart/form-data">
	<table>
	<tr>
	<td>Item name:</td> <td><input type="text" name = "file_name" pattern="+[A-Za-z]+" title="Please enter letters only" placeholder = "enter item name" required></td>
	</tr>
	<tr>
		<td>Select Genre:</td><td> <select name="artgenre" required>
		    <option value="" disabled selected>- -Select Genre- -</option>
			<option value="graphic design">Graphic Design</option>
			<option value="people">People</option>
			<option value="animals">Animals</option>
			<option value="environmental">Environmental</option>
			<option value="graffiti">Graffiti</option>
			<option value="abstract">Abstract</option>
			<option value="objects">Objects</option>
			<option value="events">Events</option>
			<option value="historical">Historical Art</option>
			<option value="conceptual">Conceptual</option>
			<option value="other">Other</option>
		</select></td>
	</tr>

	<tr>
		<td>Select Art Type: </td><td><select name="arttype" required>
			<option value="" disabled selected >- -Select type of art- -</option>
			<option value="paintings">Paintings</option>
			<option value="photography">Photography</option>
			<option value="graphic design">Graphic Design</option>
			<option value="pencil art">Pencil Art</option>
			<option value="sculptures">Sculptures</option>
			<option value="other">Other</option>
		</select></td>
	</tr>

	<tr>
	<td>Choose File:</td><td> <input type="file" name="image" id="file" class="fields" required pattern="[A-Za-z]+" title="Please enter letters only">
	</tr>
    <tr>
   <td>Enter item Description: </td><td><textarea rows="5" cols="35" class="textareas" name="description" placeholder= "Enter item description" required></textarea></td>
	</tr>
	<tr>    
	<td><input type="submit" value="Upload Image"></td>
	</tr>
	</table>

</form>
<?php
include 'footer.php';
?>
</body>
</html>