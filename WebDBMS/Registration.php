<html>
<body>
<?php

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "WebDBMS";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$usn = $_POST['USN'];
$name = $_POST['Name'];
$branch = $_POST['BRANCH'];
$scheme= $_POST['scheme'];
$ssid= $_POST['ssid'];
$phone= $_POST['phone_Number'];
$address= $_POST['Address'];





$sql = "INSERT INTO student_table(usn, Name,PhoneNumber,Branch, Address, Scheme, ssid) VALUES ('$usn', '$name','$phone', '$branch', '$address','$scheme','$ssid')";

if ($conn->query($sql) === TRUE) {
	echo "data in databse";
	} else {
    echo "error" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
