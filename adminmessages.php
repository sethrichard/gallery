<?php 

include 'header.php';
include 'dbconnection.php';
$sender=$_SESSION['user_id'];

// message retrieval
$sql = "SELECT * FROM messages";
$result = mysql_query($sql) or exit(mysql_error());

// message retrieval\

echo '
<div id = "messagebar">
<table class = "messagetable">
';

	# code...


	while($row = mysql_fetch_array($result)){

$msg = $row['message'];
$msgdate=$row['message_date'];
$msgtime = $row['message_time'];
$mem_id = $row['member_id'];
$mem_name = $row['member_name'];



$_SESSION['sender'] = $mem_name;
$_SESSION['memberid']= $mem_id;

echo '
<tr><td>From:'.$mem_name.'</td>
</tr>
<tr>
<td>'.$msgtime.'<td>
<td>'.$msgdate.'</td>
</tr>

<tr>
<td>'.$msg.'</td>
</tr>
<tr>
';


echo "<td><a href='messagereply.php?mem_id=" . $row['member_id']."'>Reply</a></td>";

}

// <td><input type = "text" name="msg" placeholder = "type text here">
// <input type="hidden" name="id" value="'.$senderid.'" >
// <input type="hidden" name="name" value="'.$sender.'" >
// 	<input type = "submit" value = "Send">
// </td>
// <div id="bottomborder"></div>


echo'
</tr>
</table>
';

echo '
</div>
';
			
		



 ?>