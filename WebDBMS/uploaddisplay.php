<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


$result= mysqli_query( $conn,"SELECT description, filename FROM upload ORDER BY ID desc");

print "<table border=1>\n"; 
while ($row = mysqli_fetch_array($result)){ 
$files_field= $row['filename'];
$files_show= "academics/$files_field";
$descriptionvalue= $row['description'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 
$conn->close();

?> 
