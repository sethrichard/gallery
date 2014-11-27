<?php 
include 'header.php';
include 'dbconnection.php';
$date = date('l j F,Y');
$time = date('h:i:s A');
// $mem_name= $_SESSION['sender'];
$id = $_SESSION['memberid'];

$mem_id = $_GET['mem_id'];

$sql1= "SELECT * FROM members WHERE member_id = '$mem_id'";
$result1= mysql_query($sql1) or exit(mysql_error());

$rows = mysql_fetch_array($result1);
$fname = $rows['fname'];
$sname = $rows['sname'];
$oname = $rows['onames'];

$names = $fname ." ".$sname." ".$oname;


echo $mem_id;
echo "here: ".$names;
echo '
 <form>
 	<table>
 		<tr>
 			<td>Recipient: '.$names.'
 		</tr>
 		<tr>
 			<td></td>
 		</tr>
 	</table>
 </form>';

$sql = "INSERT INTO outbox(member_id,member_name,message,message_time,message_date) VALUES ('$id','$names','$mem_id','$time','$date')";
$result = mysql_query($sql) or exit(mysql_error());

echo "SUCCESS";
 ?>
