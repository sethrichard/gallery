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

	echo '	</li>
</ul>
</div>
</body>
</html>
';

include 'passwordhandling.php';
include 'dateinfo.php';
include 'dbconnection.php';

$id=$_GET['item_id'];
$sql = "SELECT * FROM items WHERE item_id = '$id'"; //You don't need a ; like you do in SQL
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

echo "<div id = \"infotable\"><table>"; // start a table tag in the HTML
echo "
<tr>
<th>Item ID</th>
<th>Item name</th>
<th>Genre</th>
<th>Item Type</th>
<th>Item desc</th>

</tr>
";
echo "<tr>";
$row = mysql_fetch_array($result);
$url = $row['item_url'];
echo "<div id =\"ppic\"><img class=\"floats\" src = '$url'></div>";
echo "<tr>
<td>" . $row['item_id'] . "</td>
<td>" . $row['item_name'] . "</td>
<td>" . $row['item_genre'] . "</td>
<td>" . $row['item_type'] . "</td>
<td>" . $row['item_desc'] . "</td>
<td><a href='requestaccept.php?req_id=" . $row['request_id'] . "'>Accept/Reject</a></td>
</tr>
</table>
";
include 'footer.php';
 ?>