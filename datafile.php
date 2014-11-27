<?php 
include 'dbconnection.php';
$nm1 = $_GET['nm'];
$sql = "SELECT * FROM members WHERE fname like ('$nm1%')";
$result = mysql_query($sql);
echo "<table>";
while ($row=mysql_fetch_array($result)) {
	# code...
	echo "<tr>";
	echo "<td>";
	echo "<td><a href='memberotherprofile.php?mem_id=" . $row['member_id'] . "'>";
	echo $row['fname'];
	echo "</a></td>";
	
	echo "</td>";
	echo "</tr>";

}
echo "</table>";
include 'footer.php';
 ?>