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

// QUERY FOR RECIEVals
$sql = "SELECT * FROM enquiries";
$result = mysql_query($sql) or exit(mysql_error());


// QUERY FOR REPLies
$sql1 = "SELECT * FROM outbox";
$result1 = mysql_query($sql1) or exit(mysql_error());



echo '<div id= "enqtable">
	 <table class = "table dbtable">

';

while ($row = mysql_fetch_array($result)) {
	# code...
	 $sent_id = $row['enq_id'];
	echo '
	 	<tr>
 		<th><strong>Enquiry</strong></th>
 		<th><strong>Enquiry Date</strong></th>
 		<th><strong>Enquiry Sender</strong></th>
 	</tr>

	<tr>
	<td height = "50" width="20">'.$row["enq_desc"].'</td>

	<td>'.$row["enq_date"].'</td>
	
	<td>'.$row["enq_email"].'</td>

	</tr>
	';

	$rows = mysql_fetch_array($result1);
	$reply_id = $rows['enquiry_id'];

	if ($reply_id = $sent_id) {
		# code...
		if(!($rows["message"])){
			echo '
			<tr><th colspan="3"><strong>Reply</strong></th></tr>
		<tr>
		<td colspan="3">This Post has not been replied to yet</td>
		</tr>
		';
		}
		else{
	echo'
	<tr><th colspan="3"><strong>Reply</strong></th></tr>
	
	<tr>
	<td>'.$rows["message"].'</td>
	<td>'.$rows["message_date"].'</td>
	<td>'.$rows["message_time"].'</td>
	</tr>
	';
}
	}

		
}

echo "

 </table>
";
include 'footer.php';
 ?>
