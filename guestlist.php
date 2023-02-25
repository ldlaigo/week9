<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/7f34032a4bff4f339d57dc511988efb5/f884c7ec3a21d55c-0c/s540x810/dc5c172d20b43a9e62b6b7759dffc49289ebb4b1.jpg">
<title>My Practice Website(HTML)</title>
</head>
<body>
<div class="topnav">
  <a class ="icon" href="index.php"><img src="https://64.media.tumblr.com/e0b978612c68d83635151d03fa995a0c/e1089a909f72b296-c7/s540x810/640bd85b2a8cc63ab5d08ee11459fec87c3a681a.jpg" style="width:48px;height:48px; margin:0px; margin-bottom:-5px;"></a>
  <a href="index.php">Home</a>
  <a href="forms.php">Forms</a>
  <a class="active" href="guestlist.php">Chatter List</a>
  <a href="#about">About</a>
</div>
<?php
$servername = "192.168.150.213";
$username = "webprogss211";
$password = "fancyR!ce36";
$dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, website, comment, gender, reg_date FROM ldlaigo_guest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>