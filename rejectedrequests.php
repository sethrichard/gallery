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
$sql = "SELECT * FROM requests WHERE accept = 2"; //You don't need a ; like you do in SQL
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());

echo '<p>This table shows pending requests. View <a href = "acceptedrequests.php"> Accepted </a> or <a href ="requestreject.php"> Rejected</a> requests</p>';
echo "<div id='tabledb'><table class ='dbtable'>"; // start a table tag in the HTML


// $rows = mysql_fetch_array($result);


echo "<tr>
<td>Request ID</td><td>Description</td><td>Sender</td><td>Date</td><td>Time</td><td>Item</td><td>Request</td>
</tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "
<tr>
<td>" . $row['request_id'] . "</td>
<td>" . $row['description'] . "</td>
<td>" . $row['sender_email'] . "</td>
<td>" . $row['req_date'] . "</td>
<td>" . $row['req_time'] . "</td>
<td><a href='itemview.php?item_id=" . $row['item_id'] . "'>Item info</a></td>
<td><a href='acceptrequest.php?request_id=" . $row['request_id'] . "'>Accept</a> or <a href='rejectrequest.php?request_id=" . $row['request_id'] . "'>Reject</a></td>


</tr>";  //$row['index'] the index here is a field name
}

echo "</table></div>"; //Close the table in HTML

include 'dateinfo.php';
include 'footer.php';
mysql_close(); //
 ?>