<?php 
include 'header.php';
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

$sql = "SELECT * FROM items";
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
echo("<ul>");
while ($row = mysql_fetch_array($result)) {
	# code...
	$url = $row['item_url'];
	echo "<div class=\"floats\" id= \"gallery\">
	<li><img src = '$url'></li>
	</div>";
}
echo("</ul>");
?>

</div>
</body>
</html>