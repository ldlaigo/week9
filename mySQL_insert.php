<?php
$servername = "localhost";
$username = "webprogss211";
$password = "webprogss211";
$dbname = "ldlaigo_guest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ldlaigo_guest (id,name,email,website,comment,gender)
VALUES (0,'sample', 'sample@example.com', '','other')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 