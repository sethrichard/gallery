<?php 
session_start();
include 'dbconnection.php';
$id=$_GET['mem_id'];
$sql = "SELECT * FROM members WHERE member_id = '$id'"; //You don't need a ; like you do in SQL
$result = mysql_query($sql) or exit ("SQLquerry error".mysql_error());
echo "<table border = 2>"; // start a table tag in the HTML
echo "
<tr>
<th>Member_ID</th><th>First Name</th><th>Second Name</th>
<th>Other Names</th><th>National ID/Passport</th><th>Date of Birth</th>
<th>Gender</th><th>Email</th><th>Phone No.</th>
</tr>
";
echo "<tr>";
$row = mysql_fetch_array($result);
echo "<tr>
<td>" . $row['member_id'] . "</td>
<td>" . $row['fname'] . "</td>
<td>" . $row['sname'] . "</td>
<td>" . $row['onames'] . "</td>
<td>" . $row['national_id'] . "</td>
<td>" . $row['DOB'] . "</td>
<td>" . $row['gender'] . "</td>
<td>" . $row['email'] . "</td>
<td>" . $row['phone_no'] . "</td>
</tr></table>";

 ?>