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

session_start();
include 'dbconnection.php';
$sql = "SELECT * FROM logs"; //You don't need a ; like you do in SQL
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

echo "<div id='tabledb'><table class ='dbtable'>"; // start a table tag in the HTML

echo "<tr>
<td>Member ID</td><td>Date</td><td>Time</td><td>Member Info</td>
</tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "
<tr>
<td>" . $row['member_id'] . "</td>
<td>" . $row['log_date'] . "</td>
<td>" . $row['time'] . "</td>
<td><a href='memberinfo.php?mem_id=" . $row['member_id'] . "'>Member Information</a></td>
</tr>";  //$row['index'] the index here is a field name
}

echo "</table></div>"; //Close the table in HTML
include 'dateinfo.php';
include 'footer.php';
mysql_close(); //
 ?>