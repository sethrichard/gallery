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

$sql = "SELECT * FROM enquiries";
$result = mysql_query($sql) or exit(mysql_error());

echo '<div id= "enqtable">
	 <table class = "table dbtable">
 	<tr>
 		<td><strong>Enquiry</strong></td>
 		<td><strong>Enquiry Date</strong></td>
 		<td><strong>Enquiry Sender</strong></td>
 		<td><strong>Reply Enquiry</strong></td>
 	</tr>
';

while ($row = mysql_fetch_array($result)) {
	# code...
	// $enq_id = $row['enq_id'];
	echo '
	<tr>
	<td height = "50" width="20">'.$row["enq_desc"].'</td>

	<td>'.$row["enq_date"].'</td>
	
	<td>'.$row["enq_email"].'</td>

	<td><a href ="enquiryreply.php?id='.$row["enq_id"].'">Reply</a></td>
	</tr>
	';
}

echo "

 </table>
";
include 'footer.php';
 ?>
