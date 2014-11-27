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

?>
<html>
<head>
	<title>Site Name| Homepage</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link href="sliderstyle.css" type="text/css" rel="stylesheet">
	</head>
<body>
<div id="bod">
<div id="mainimg">
<?php  
include 'imageslider.php';
?>
</div>
<!-- QUOTES -->
<div id="quotes">
	<p>"Painting is silent poetry" ~ Plutarch, Moralia</p>
</div>

<!-- RIGHT BUBBLE THING -->
<div id="tops" class="clearfix">
<table>
<th>Modern Art Forms</th>
<tr>
<td><div class="clearfix" id="farleft">
		<img src="samples/rastaman.jpg"><br>
		<h4>Graffiti</h4>
		<p>Graffiti may also express underlying social and political messages and a whole genre of artistic expression is based upon spray paint graffiti styles.</p>
	</div>
</td>
<td>
	<div class="clearfix" id="middle">
		<img src="samples/balloon_girl.jpg"><br>
		<h4>Conceptual</h4>
		<p>Conceptual art, sometimes simply called Conceptualism, is art in which the concept(s) or idea(s) involved in the work take precedence over traditional aesthetic and material concerns.</p>
	</div>
</td>
<td>
	<div class="clearfix" id="farright">
		<img src="samples/eyes.jpg"><br>
		<h4>Abstract Art</h4>
		<p>Abstract art, nonfigurative art, nonobjective art, and nonrepresentational art are loosely related terms. </p>
	</div>
</td>
</tr>
</table>
</div>
<div id="parttwo" class="clearfix">
</div>
<!-- MEMBER INFO -->
<?php 
include 'dateinfo.php';
 ?>
<!-- FIRST ROW OF BUBBLES -->
<div id="firstrow" class="clearfix">
<div id="topleft">
	<img src="samples/lady.jpg">
	<p>Street art is an umbrella term defining forms of visual art created in public locations, usually unsanctioned artwork executed outside of the context of traditional art venues. The term gained popularity during the graffiti art boom of the early 1980s and continues to be applied to subsequent incarnations. Stencil graffiti, wheatpasted poster art or sticker art, and street installation or sculpture are common forms of modern street art. Video projection, yarn bombing and Lock On sculpture became popularized at the turn of the 21st century.</p>
</div>
<div id="topmid">
	<img src="samples/paints.jpg">
		<p>Graffiti is writing or drawings that have been scribbled, scratched, or sprayed illicitly on a wall or other surface, often in a public place.[1] Graffiti ranges from simple written words to elaborate wall paintings, and it has existed since ancient times, with examples dating back to Ancient Egypt, Ancient Greece, and the Roman Empire. In modern times, paint (particularly spray paint) and marker pens have become the most commonly used graffiti materials.</p>
</div>
<div id="topright">
	<img src="samples/woman.jpg">
		<p>Abstract art uses a visual language of form, color and line to create a composition which may exist with a degree of independence from visual references in the world.[1] Western art had been, from the Renaissance up to the middle of the 19th century, underpinned by the logic of perspective and an attempt to reproduce an illusion of visible reality. The arts of cultures other than the European had become accessible and showed alternative ways of describing visual experience to the artist. By the end of the 19th century many artists felt a need to create a new kind of art which would encompass the fundamental changes taking place in technology, science and philosophy. The sources from which individual artists drew their theoretical arguments were diverse, and reflected the social and intellectual preoccupations in all areas of Western culture at that time.</p>
</div>

<!-- END OF FIRST BUBBLE ROW -->
</div>
</div>

<!-- GALLERY ADDITIONS -->
<form action="gallerysort.php" name="categoryform" method="POST">
<table>

</table>
</form>
			<!-- <option value="graphic design">Graphic Design</option>
			<option value="people">People</option>
			<option value="animals">Animals</option>
			<option value="environmental">Environmental</option>
			<option value="graffitti">Graffiti</option>
			<option value="abstract">Abstract</option>
			<option value="objects">Objects</option>
			<option value="events">Events</option>
			<option value="historical">Historical Art</option>
			<option value="conceptual">Conceptual</option>
			<option value="other">Other</option>
		</select></td> -->
</body>
<?php
include 'footer.php';
?>
</html>

