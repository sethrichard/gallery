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
   <li class = "active"><a href=\'gallery.php\'><span>Gallery</span></a></li>
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
 ?>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div gallery>
<?php
include 'dbconnection.php';

$sql = "SELECT * FROM items WHERE approved_status = 0";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

echo("<ul>");
echo "<div id= \"gallery\">";
echo "<p class = \"sortlink\">Sort by <a href= \"genresort.php\">Genre</a></p>";
while ($row = mysql_fetch_array($result)) {
	# code...
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";
}
echo '</ul>
		</div>
	';
?>

</div>
<?php
include 'footer.php';
?>
</body>
</html>