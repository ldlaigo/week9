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
</style>
<body>
<div class="topnav">
  <a class ="icon" href="#home"><img src="https://64.media.tumblr.com/e0b978612c68d83635151d03fa995a0c/e1089a909f72b296-c7/s540x810/640bd85b2a8cc63ab5d08ee11459fec87c3a681a.jpg" style="width:48px;height:48px; margin:0px; margin-bottom:-5px;"></a>
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div class = "divbody">
<p id="date"></p>
<script>
  let d = new Date();
  document.getElementById("date").innerHTML = "Today's date is"  + d;
</script>
<img src="https://scontent.fmnl17-2.fna.fbcdn.net/v/t1.6435-9/65507555_380824879228187_2085077021569843200_n.jpg?stp=c0.23.206.206a_dst-jpg_p206x206&_nc_cat=111&ccb=1-7&_nc_sid=da31f3&_nc_eui2=AeFY7kFDXIbJlQSxEuiGM_dJexdoI8q8uMR7F2gjyry4xMfBfklmN1Tiy-W70Jpew2b3Pg17NC2g01BeN7rftdwR&_nc_ohc=VWuMcEULuKgAX8YEHeP&_nc_ht=scontent.fmnl17-2.fna&oh=00_AfB76V8-bP1CdEY-8-kOP7P2O-IY5yUT5oK3Atqw7h8iMw&oe=63EC8E4E" alt="My picture" style="display: block; margin-left: auto; margin-right: auto; width:25%;height:25%;">
<h1 style="text-align:center;"> HELLO!! I AM YURI! WELCOME TO MY PERSONAL BLOG </h1>
<p style="text-align:center;">I'm 19, I study comsci in APC since grade 11 with a 50% scholarship fee, I chose this course mainly because of the high demanding job which hopefully will lead me to my goal of having fanancial stability</p>
<p style="text-align:center;"> If it wasn't clear enough my hobbies are playing games and watching films of any kind, but mainly anime </p>
<!-- Please Watch Bocchi the Rock -->

<a href="anime.vc/watch/bocchi-the-rock-17479?ep=95894">Watch Bocchi</a>
<img src="https://media.tenor.com/vuF1B4DJMEIAAAAM/bocchi-the-rock-nijika.gif" alt="Crying Nijika">
<p style="background-color:tomato;">Style Lesson</p>
<h2><b>TRUST ME!</b></h2>
<a href="https://matias.ma/nsfw/">https://matias.ma/nsfw/</a>
<p style="background-color:tomato;">THIS IS A OBLIGATORY NIJIKA</p>
<img src="https://cdn.myanimelist.net/images/characters/16/491305.jpg" alt="Obligatory Nijika">
<p><q><i>I m-miss my sister</i></q> - Nijika 2022 </p>
</div>
</body>
</html>