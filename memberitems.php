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


$sql = "SELECT * FROM items WHERE member_id = '$id'"; //You don't need a ; like you do in SQL
$result = mysql_query($sql) or exit(nouploads());

echo("<ul>");
echo "<div id= \"gallery\">";
echo "<h1>Your Uploads</h1>";
$id = $_SESSION['user_id'];

while ($row = mysql_fetch_array($result)) {
	# code...
	$url = $row['item_url'];
	$name = $row['item_name'];
	$item_id = $row['item_id'];
$sql1 = "SELECT * FROM items WHERE item_id = '$item_id'"; //You don't need a ; like you do in SQL
$result1 = mysql_query($sql1) or exit(nouploads());

$rows = mysql_fetch_array($result1);
$approval = $rows['approved_status'];
$desc = $rows['item_desc'];
if ($approval == 0) {
	# code...
		echo "<div class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: .$name</li>
	<li class = \"labels\">Desc: .$desc</li>
	<li class = \"labels\">Approved</li>
	";
}
elseif ($approval == 1) {
	# code...
			echo "<div class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: .$name</li>
	<li class = \"labels\">Desc: .$desc</li>
	<li class = \"labels\">Approval Pending</li>
	";
}
elseif (($approval == 2)||($approval == 3)) {
	# code...
			echo "<div class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: .$name</li>
	<li class = \"labels\">Desc: .$desc</li>
	<li class = \"labels\">Unnaproved</li>
	";
}

echo "<li><a href='discardmember.php?item_id=".$row['item_id']."'>Discard</a></li>";
echo "</div>";
}

echo '</ul>
		</div>
	';
	include 'footer.php';

function nouploads(){
	echo "<p>You have no uploads</p>";
}
 ?>
