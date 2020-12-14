<html>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "WebDBMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection unsuccessfuly";
}
echo "Connected successfully";

$conn->close();
?>



</body>
</html>

