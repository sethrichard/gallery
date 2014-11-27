<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
if (isset($_SESSION['user_id'])) {
$karibu = $_SESSION['firstname'];
echo "<p>
You are logged in as".$karibu;
echo "</p>";
}
 ?>

</body>
</html>