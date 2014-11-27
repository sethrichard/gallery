<?php 
$dates= date('F j,Y');

echo '<link rel="stylesheet" type="text/css" href="css.css">
	';
echo "
<div id=\"meminfo\">

<!-- DATE THING -->
	<div id=\"datething\" class=\"clearfix\">
	<table id = \"datetable\" class = \"clearfix\">
	<tr>";
echo "<p>";
echo $dates;
echo '</p>
</tr>
</table>
</div>
<div id=\"info\">';

if (isset($_SESSION['user_id'])) {
	# code...
	include 'dbconnection.php';
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM members WHERE member_id = '$id'"; 
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
$row = mysql_fetch_array($result);
	
	echo "
	<table>
	<table class =\"infotable\">
	<th>Your Information</th>
	<tr>
		<td>" . $row['fname'] ."  ".$row['sname']." ".$row['onames']."</td>
	</tr>
	<tr>
		<td>" . $row['email'] . "</td>
	</tr>
	<tr>
		<td>" . $row['phone_no'] . "</td>
	</tr>
	<tr>
		<td><a href= \"memberprofile.php\">Your Profile</a></td>
	</tr>

	</table>
</div>";
	

if ($_SESSION['wrongpassword'] == 3) {
	# code...

echo "<div id=\"fileupload\">
<table class =\"infotable\">

	<tr>
	<td><p>View <a href = \"memberdatabase.php\">Member Database.</a></p><td>
	</tr>
	<tr>
	<td><p>View <a href = \"unnaproved.php\">Unnaproved works.</a></p><td>
	</tr>
	<tr>
	<td><p>View <a href = \"trash.php\">Trash.</a></p><td>
	</tr>
	<tr>
	<td><p>View <a href = \"requestreport.php\"> Requests</a></p><td>
	</tr>
	
	<tr>
	<td><p>View <a href = \"enquiriesdatabase.php\">Enquiries</a></p><td>
	</tr>

	<tr>
	<td><p>View <a href = \"logsreport.php\"> Logs</a></p><td>
	</tr>
	<tr>
	 <td><p>Upload a <a href = \"fileuploadform.php\">file.</a></p></td>
	</tr>
	<tr>
	<td><p>View your <a href = \"memberitems.php\"> Uploads.</a></p><td>
	</tr>
		<tr>
	<td><p>View<a href = \"forum.php\"> Forum.</a></p><td>
	</tr>
		</table>
</div>
</div>";

}

else{
echo "<div id=\"fileupload\">
<table class =\"infotable\" class=\"clearfix\">
		<tr>
	<td><p>View<a href = \"forum.php\"> Forum.</a></p><td>
	</tr>
	<tr>
	 <td><p>Upload a <a href = \"fileuploadform.php\">file.</a></p></td>
	</tr>
	<tr>
	<td><p>View your <a href = \"memberitems.php\"> Uploads.</a></p><td>
	</tr>
	</table>
</div>
</div>
	";
}

}

else{
echo"
<table class =\"infotable\" class=\"clearfix\">
	<tr>
	 <td><p> You seem not to be a member,why dont you <a href = \"registration.php\">Join Us</a> and be  part of our society?</p></td>
	</tr>
	</table>
</div>
	
</div>

";


	}
	mysql_close();
 ?>