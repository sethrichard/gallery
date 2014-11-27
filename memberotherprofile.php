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
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Your Profile</title>
 </head>
 <body>
 <div>
 	<?php 
 	$id = $_GET['mem_id'];
 	include 'dbconnection.php';
 $sql = "SELECT * FROM members WHERE member_id = '$id'"; //You don't need a ; like you do in SQL
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
echo '<link rel="stylesheet" type="text/css" href="css.css">';
echo "
<div id = \"infotable\">
<table>"; // start a table tag in the HTML

echo "<tr>";
$row = mysql_fetch_array($result);
	$url = $row['ppic_url'];
echo "
<tr>
<td>";
echo "<div id =\"ppic\"><img class=\"floats\" src = '$url'></div>";
echo"
</td>
</tr>
<div id=\"restoftable\">
<tr>
<th>Member_ID: </th>
<td>" . $row['member_id'] . "</td>
</tr>
<tr>
<th>First Name: </th>
<td>" . $row['fname'] . "</td>
</tr>
<tr>
<th>Second Name: </th>
<td>" . $row['sname'] . "</td>
</tr>
<tr>
<th>Other Names: </th>
<td>" . $row['onames'] . "</td>
</tr>
<tr>
<th>National ID/Passport: </th>
<td>" . $row['national_id'] . "</td>
</tr>
<tr>
<th>Date of Birth: </th>
<td>" . $row['DOB'] . "</td>
</tr>
<tr>
<th>Gender: </th>
<td>" . $row['gender'] . "</td>
</tr>
<tr>
<th>Email: </th>
<td>" . $row['email'] . "</td>

</tr>
<tr>
<th>Phone Number: </th>
<td>" . $row['phone_no'] . "</td>
</tr>
</div>
</table>
</div>
"
;
 ?>
 	 
 </div>
 <?php 
include 'footer.php'
  ?>
 </body>
 </html>