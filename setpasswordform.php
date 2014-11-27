
<?php
include 'header.php';
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
   <li ><a href=\'index.php\'><span>Home</span></a></li>
   <li ><a href=\'gallery.php\'><span>Gallery</span></a></li>
   <li><a href=\'aboutus.php\'><span>About</span></a></li>
   <li><a href=\'enquiryform.php\'><span>Contact</span></a></li>
   <li class=\'last active\'><a href=\'registration.php\'><span>Join Us</span></a></li>
   <li>';

	echo '	</li>
</ul>
</div>
</body>
</html>
';
?>
<html>
<head>
	<title>Set Password</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1>Enter Password:</h1>
<form method="POST" name="passform" onsubmit="matchcheck()">
<table>
<tr class="fields">
<label  for="pass" class="fields">Password: </label><input class="fields" type="password" name="pass" id="first">
<label class="fields" for="pass">Confirm Password: </label><input class="fields" type="password" name="pass" id="second">
</tr>
<tr><input type="submit" value="submit"></tr>
</table>
</form>

<script type="text/javascript">
	function matchcheck(){
		var first = document.getElementById("first").value;
		var second = document.getElementById("second").value;
		if (first!=second) {
	alert("The passwords do not match!"); //will set it
		
		}
		else{
		alert("The passwords have matched");
		document.passform.action = "setpassword.php";
		}
		return ok;
	}
</script>
</body>
</html>