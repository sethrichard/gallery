<?php
session_start();
	
	require_once("dbconnection.php");
	//FILE INFO
	$description = $_POST['description'];
	$genre = $_POST['artgenre'];
	$type = $_POST['arttype'];
	$name = $_POST['file_name'];

	$mem_id = $_SESSION['user_id'];
	$allowedExts = array("gif","jpeg","jpg","png");
	$temp = explode(".", $_FILES["image"]["name"]);
	$extension = end($temp);

	if ((($_FILES["image"]["type"] == "image/gif")
		|| ($_FILES["image"]["type"] == "image/jpeg")
		|| ($_FILES["image"]["type"] == "image/jpg")
		|| ($_FILES["image"]["type"] == "image/pjpeg")
		|| ($_FILES["image"]["type"] == "image/x-png")
		|| ($_FILES["image"]["type"] == "image/png"))
		&& ($_FILES["image"]["size"] < 2000000)
		&& in_array($extension, $allowedExts))
		  {
		if ($_FILES["image"]["error"] > 0) {
			echo "Error: ". $_FILES["image"]["error"] . "<br>";
		}
		else
		{
		 	function findexts ($filename) 
			 { 
			 $filename = strtolower($filename) ; 
			 $exts = split("[/\\.]", $filename) ; 
			 $n = count($exts)-1; 
			 $exts = $exts[$n]; 
			 return $exts; 
			 } 
			 
			 //This applies the function to our file  
			 $ext = findexts ($_FILES["image"]["name"]) ;

			  //This line assigns a random number to a variable. You could also use a timestamp here if you prefer. 
 			$ran = rand () ;

			 //This takes the random number (or timestamp) you generated and adds a . on the end, so it is ready of the file extension to be appended.
			 $ran2 = "gallery_".$ran.".";

			 //This assigns the subdirectory you want to save into... make sure it exists!
			 $target = "uploads/";

			//This combines the directory, the random file name, and the extension 
			 $target = $target . $ran2.$ext; 

		  	if (file_exists($target))
     		{
     			echo $_FILES["image"]["name"] . " already exists. ";
      		}
    		else
		     {
		      move_uploaded_file($_FILES["image"]["tmp_name"],$target);
		      $approved_status = 1;
		      //execute the query to insert into the db
		      $sql = "INSERT INTO items (item_genre,member_id,item_type,item_name,item_url, item_desc,approved_status) VALUES ('$genre','$mem_id','$type','$name','$target','$description','$approved_status')";

		      $result = mysql_query($sql) or die(mysql_error());
		      header("Location:memberitems.php");
		     }
		}
	}
	else
	 {
	  	echo "Invalid file";
	}
?>