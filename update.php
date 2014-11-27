<?php
session_start();
include 'dbconnection.php'; 

$fname = $_POST["fname"];
$sname = $_POST["sname"];
$oname = $_POST["oname"];
$email = $_POST["email"];
$nat_id = $_POST["nationalid"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$image = $_POST["image"];

echo $fname;
echo $sname;
echo $oname;
echo $nat_id;

$id = $_SESSION["user_id"];

	if ($_FILES['image']['size'] == 0) {
		# code...
		$sql = "UPDATE members SET fname ='$fname',sname='$sname',onames='$oname',email='$email',national_id='$nat_id',DOB='$dob',gender='$gender',phone_no='$phone' WHERE(member_id = '$id')";
 
		      $result = mysql_query($sql) or die(mysql_error());
		      $_SESSION['lastid'] = $id;
		      $_SESSION['loginstatus'] = 1;
		      $_SESSION['wrongpassword'] = 2;
		      header("Location:memberprofile.php");
	}
	else{
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
			 $ran2 = "ppics_".$ran.".";

			 //This assigns the subdirectory you want to save into... make sure it exists!
			 $target = "profile pictures/";

			//This combines the directory, the random file name, and the extension 
			 $target = $target . $ran2.$ext; 

		  	if (file_exists($target))
     		{
     			echo $_FILES["image"]["name"] . " already exists. ";
      		}
    		else
		     {
		      move_uploaded_file($_FILES["image"]["tmp_name"],$target);
		      
		      //execute the query to insert into the db
		      $sql = "UPDATE members SET fname ='$fname',sname='$sname',onames='$oname',email='$email',national_id='$nat_id',DOB='$dob',gender='$gender',phone_no='$phone',ppic_url='$target' WHERE(member_id = '$id')";
 
		      $result = mysql_query($sql) or die(mysql_error());
		      header("Location: memberprofile.php");
		      $_SESSION['lastid'] = $id;
		      $_SESSION['loginstatus'] = 1;
		      $_SESSION['wrongpassword'] = 2;
		     }
		}
	}
	else
	 {
	  	echo "Invalid file";
	}
}
 ?>