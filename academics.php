<?php
error_reporting(0); 
?> 
<?php
$msg = ""; 

// If upload button is clicked ... 
if (isset($_POST['upload'])) { 

	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$description= $_POST['description_entered'];
	$usn= $_POST['USN'];
	

	$semester=$_POST['Event'];



		$folder = "academics/".$filename; 
		
	$db = mysqli_connect("localhost", "root", "", "webdbms"); 

		// Get all the submitted data from the form 
		$sql = "INSERT INTO academics (USN,semester,filename) VALUES ('$usn','$semester','$filename')"; 

		// Execute query 
		mysqli_query($db, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = "Image uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload image"; 
	} 
} 
$result = mysqli_query($db, "SELECT * FROM upload"); 
?> 

<!DOCTYPE html> 
<html> 
<head> 
<title>Image Upload</title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<div id="content"> 

<form method="POST" action="" enctype="multipart/form-data">
 USN: <input type="text" name="USN"/><br><br>


 Semester <select name="Event " id="event">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  
  
</select>

	<input type="file" name="uploadfile" value=""/> 	
	<div> 
		<button type="submit" name="upload">UPLOAD semester markscard</button> 
		</div> 
</form> 
</div> 
</body> 
</html>