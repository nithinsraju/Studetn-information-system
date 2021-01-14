<?php
error_reporting(0); 
?> 
<?php
$msg = ""; 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 

	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	
	$sem_name= $_POST['sem_name'];

	$description=$_POST['sem_desc'];



		$folder = "cocurricular/".$filename; 
		
	$db = mysqli_connect("localhost", "root", "", "webdbms"); 

		// Get all the submitted data from the form 
		$sql = "INSERT INTO co-cur (USN,title,filename,description) VALUES ('$usn','$name','$filename','$description')"; 

		// Execute query 
		mysqli_query($db, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = "Image uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload image"; 
	} 
} 
 
?> 