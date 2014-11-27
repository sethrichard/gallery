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

include 'dbconnection.php';

// ******************************8
// memberinfo


$sql = "SELECT * FROM members WHERE active = '0'";
$result = mysql_query($sql) or exit("SQL error ".mysql_error());
echo '<p>These are members with active accounts. View members with <a href = "memberdeactivated.php">Deactivated Accounts</a></p>';
echo "<div id='tabledb'><table class ='dbtable'>"; // start a table tag in the HTML

echo "<tr>
<td>Member ID</td><td>First Name</td><td>Surname</td><td>Other Names</td><td>ID/Passport</td><td>Date</td><td>Gender</td><td>Email</td><td>Phone</td><td>Mem Info</td>
</tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "
<tr>
<td>" . $row['member_id'] . "</td>
<td>" . $row['fname'] . "</td>
<td>" . $row['sname'] . "</td>
<td>" . $row['onames'] . "</td>
<td>" . $row['national_id'] . "</td>
<td>" . $row['DOB'] . "</td>
<td>" . $row['gender'] . "</td>
<td>" . $row['email'] . "</td>
<td>" . $row['phone_no'] . "</td>
<td><a href='viewprofileadmin.php?mem_id=" . $row['member_id'] . "'>Member Information</a></td>
</tr>";
}

echo "</table></div>"; //Close the table in HTML

include 'dateinfo.php';
include 'footer.php';
 ?>
