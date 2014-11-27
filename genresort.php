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
	<link rel="stylesheet" type="text/css" href="css.css">
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
   <li><?php 
				include \'loginform.php\';
				$_SESSION[\'pageinfo\'] = $_SERVER[\'SCRIPT_NAME\'];
			 ?>
	</li>
</ul>
</div>
</body>
</html>
';

include 'passwordhandling.php';
include 'dateinfo.php';
include 'dbconnection.php';

echo"<ul>";
echo "<div id= \"gallery\">";
people();
graphicdesign();
animals();
environmental();
graffiti();
abstractart();
objects();
events();
historical();
conceptual();
other();
echo '</ul>
		</div>';
include 'footer.php';
function people(){
$sql = "SELECT * FROM items WHERE item_genre = 'people' AND approved_status = 0 ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: People</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
		$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
		<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li></div>";
}

};

function graphicdesign(){
$sql = "SELECT * FROM items WHERE item_genre = 'graphic design' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Graphic Design</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";
}
};

function animals(){
$sql = "SELECT * FROM items WHERE item_genre = 'animals' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Animals</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};
function environmental(){
$sql = "SELECT * FROM items WHERE item_genre = 'environmental' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Environmental</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};

function graffiti(){
$sql = "SELECT * FROM items WHERE item_genre = 'graffiti' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Graffiti</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};
function abstractart(){
$sql = "SELECT * FROM items WHERE item_genre = 'abstract' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Abstract</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};

function objects(){
$sql = "SELECT * FROM items WHERE item_genre = 'objects' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Objects</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};

function events(){
$sql = "SELECT * FROM items WHERE item_genre = 'events' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Events</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};

function historical(){
$sql = "SELECT * FROM items WHERE item_genre = 'historical' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Historical</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";}
};

function conceptual(){
$sql = "SELECT * FROM items WHERE item_genre = 'conceptual' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Conceptual</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";
}
};

function other(){
$sql = "SELECT * FROM items WHERE item_genre = 'other' AND approved_status = 0  ";
$result = mysql_query($sql) or exit("SQLquerry error".mysql_error());
echo "<h3 class = \"sortlink\">Genre: Other</h3>";
while ($row = mysql_fetch_array($result)) {
	$url = $row['item_url'];
	$name = $row['item_name'];
	$desc = $row['item_desc'];
	echo "<div id=\"genreborder\" class=\"floats\"><li><img class=\"floats\" src = '$url'></li>
	<li class = \"labels\">Name: $name</li>
	<li class = \"labels\">Desc: $desc</li>
	<li><a href = artistcontact.php?item_id=".$row['item_id'].">Contact Artist</a></li>
	</div>";
}
};
 ?>
