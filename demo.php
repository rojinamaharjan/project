<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-position: center;
    top-margin:0px;
    background-repeat: no-repeat;
}
.center{
    //display: block;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    position: fixed;
    margin-bottom:auto;
}
.navbar {
    overflow: hidden;
    background-color:#f4511e;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 0px;
    padding: 0px;
    height:10%;
}

.navbar a {
    float: left;
    font-size: 25px;
    color: black;
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
    background-color: white;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    float:left;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: red;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: blue;
    width:20%;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 0qw    px;}
  .sidenav a {font-size: 18px;}
}
.SS{
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 40px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
}
</style>
</head>
<body>
    <div class="navbar" class="sidenav">
  <a href="shop.php">Home</a>
  <a href="logout.php">logout</a>
  <h3 style="text-align:left">
  <?php
    $con=mysqli_connect("localhost","root","root","tattoo1");
    if(!$con)
    {
        die ("Sorry!Connection failed".mysqli_connect_error());
    }
    $sql="SELECT * FROM user where user_id=1";
    $result=mysqli_query($con,$sql);
        while($rows=mysqli_fetch_assoc($result)){
            echo "<center ><ul type='none' style='color:white;'>";
            echo "<i class='ss'><img src='avatar.png' height=25 width=25></i>".$rows['Name'];
            echo "</ul></center>";
      }
      ?>
  </h3>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="design.php">Design</a>
  <a href="shop.php">Tattoo studio</a>
  <a href="boot.php">upload Design</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "135px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
