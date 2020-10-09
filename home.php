<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
	
.topnav {
    overflow: hidden;
    background-color: #f4511e;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 20px 25px;
    font-size:20px; 
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.topnav a:active{
    background-color: #ddd;
    color: black;
}
div.heading{
  text-align: center;
}
.heading1{
  font-size: 200%;
}
div.gallery {
  position: relative;
  margin:1%;
    border:1px solid #ccc;
    float: left;
    width: 25%;
    padding: 1%;
}
div.gallery1 {
  position: relative;
    border:1px solid #ccc;
    float: left;
    width: 25%;
  vertical-align: top;
}
div.japanese {
  position: relative;
    border:1px solid #ccc;
    float: left;
    width: 25%;
  
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery1:hover {
    border: 1px solid #777;
}

div.gallery img {
  position: relative;
    width: 100%;
    height: auto;
}
div.gallery1 img {
  position: relative;
    width: 100%;
    height: auto;
}
div.japanese img {
  position: relative;
    width: 100%;
    height: auto;
}
div.desc {
  position: relative;
    text-align: center;
    width: 100%;
    text-align: justify;
}
div.desc2 {
  position: relative;
    text-align: center;
    width: 100%;
    text-align: justify;
    vertical-align: top;
}
div.desc1 {
  position: relative;
    text-align: center;
    width: 100%;
    text-align: justify;
    clear: both;
}
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 20px 30px;
    text-decoration: none;
     margin-top: 0px;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #f4511e;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 50px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    color:white;
}

.sidenav a:hover {
    color: #f4511e;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
span.side:hover{
  color:black;
  background-color:#ddd; 
}
.side{
  color:white;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
.logout{
  float: right;
}
.w3-content{
  padding-top: 1%;
  margin-left: 25%; 
}
</style>
</head>
<body>

  <div class="topnav">
    <div id="mySidenav" class="sidenav">

      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div> 
    <span class="side" style="font-size:19px;cursor:pointer;float: left; padding: 1.5%;" onclick="openNav()">&#9776;</span>
    <a href="home.php">Home</a>
    <div class="logout">
      <img  src="avatar.png" alt="Avatar" class="avatar">
      <a href="welcome.html">Logout</a>
    </div>
  </div>

  <div align="center" class="w3-content" style="max-width:500px">
    <img class="mySlides" src="traditional2.jpg" style="width:100%">
    <img class="mySlides" src="traditional3.jpg" style="width:100%">
    <img class="mySlides" src="traditional4.jpg" style="width:100%">
  </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
<html>