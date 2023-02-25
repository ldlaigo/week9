<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/7f34032a4bff4f339d57dc511988efb5/f884c7ec3a21d55c-0c/s540x810/dc5c172d20b43a9e62b6b7759dffc49289ebb4b1.jpg">
    <title>My Practice Website(HTML)</title>
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
  background-color: #C1A00E;
}

.container {
  margin-top: 5rem;
  margin-bottom: 5rem;
}

.card {
  width: 100%;
}

.card-body {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.card-body img {
  border-radius: 50%;
  margin-right: 1.5rem;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 1px rgba(0, 0, 0, 0.1);
}

.card-body h6 {
  font-weight: bold;
  color: #007BFF;
  margin-bottom: 0.5rem;
}

.card-body p {
  color: #6C757D;
  margin-bottom: 0;
}

.card-body .mt-3 {
  margin-top: 1rem;
}

.card-body .mb-4 {
  margin-bottom: 1.5rem;
}

.card-body .pb-2 {
  padding-bottom: 0.5rem;
}
.comment-avatar {
  border-radius: 50%;
}
.fw-bold {
  font-weight: bold;
}

.text-primary {
  color: #007bff; /* you can change the color to your preferred color */
}

.mb-1 {
  margin-bottom: 1rem;
}
.fw-bold {
  font-weight: bold;
}

.text-primary {
  color: #007bff; /* you can change the color to your preferred color */
}

.mb-1 {
  margin-bottom: 1rem;
}
.mt-3 {
  margin-top: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}
.text-muted {
  color: #6c757d;
}

.small {
  font-size: 0.875rem;
}

.mb-0 {
  margin-bottom: 0 !important;
}
h6 {
  font-size: 2.5rem; /* change the value to the desired size */
}
    </style>
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
        echo '
<section style="background-color: #C1A00E;">
    <div class="container my-5 py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-start align-items-center">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="https://pm1.narvii.com/6190/f5a1c4e4ac9ad3c503508a4855552b512b8d99b9_hq.jpg" alt="avatar" width="60"
                  height="60" />
                <div>
                  <h6 class="fw-bold text-primary mb-1"> Chatter#'.$row['id'].' '.$row['name'].'</h6>
                  <p class="text-muted small mb-0">
	'.$row['email'].' - '.$row['reg_date']. '
                  </p>
                </div>
              </div>
			  <p class="mt-3 mb-4 pb-2">
				Comment:<br>'.$row['comment'].'
			  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>