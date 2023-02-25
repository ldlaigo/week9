<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/7f34032a4bff4f339d57dc511988efb5/f884c7ec3a21d55c-0c/s540x810/dc5c172d20b43a9e62b6b7759dffc49289ebb4b1.jpg">
<title>My Practice Website(HTML)</title>
</head>
<style>
.topnav {
  margin: -10px;
  background-color: rgb(250,246,231);
  border: .5px solid black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color:  rgb(221,197,105);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ae8b0c;
  color: white;
}
.topnav a.icon {
  padding: 0px;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
body {
  background-color: rgba(225,197,100, 0.8);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
section {
    background-color: #eee;
  }
.container {
    margin-top: 5rem;
    margin-bottom: 5rem;
  }
.card {
    border: none;
  }
.card-body {
    padding: 2rem;
  }
.rounded-circle {
    object-fit: cover;
  }
.fw-bold {
    font-weight: 700;
  }
.text-primary {
    color: #0d6efd;
  }
.small {
    font-size: 0.875rem;
  }
.me-3 {
    margin-right: 1rem;
  }
.mb-1 {
    margin-bottom: 0.25rem;
  }
.mb-0 {
    margin-bottom: 0;
  }
</style>
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
        echo '<section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                <p class="text-muted small mb-0">
                  Shared publicly - Jan 2020
                </p>
              </div>
            </div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>