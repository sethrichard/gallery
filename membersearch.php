<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="searchmembers" method="POST">
Enter name: <input type="text" name="membername" onkeyup="run();">	
</form>
<div id="d1">
	
</div>
<script>
	function run(){
		xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","datafile.php?nm="+document.searchmembers.membername.value,false);
		xmlhttp.send(null);
		document.getElementById("d1").innerHTML=xmlhttp.responseText;
	}
</script>
</body>
</html>