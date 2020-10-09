<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 0.6s;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 40px 10px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 30px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 20px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
      font-size: 25px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="boot1.php">Home</a>
    </div>
  </div>
</nav>
  <html>
<head>
  <link rel="stylesheet" type="text/css" href="create.css">
</head>
<body style="background-image: radial-gradient(green,black);">
<div style="background-color:black;" class="signup">
<?php
  echo "<br>";
	echo "<center style='color:red;font-size:15px;'>";
	$name=$_POST['name'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$user=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$valid=0;
	if(strlen($name)<3){
		echo "your name is not valid.<br/>";
		$valid=1;
	}
	if(strlen($address)<3)
	{
		echo "your address is not valid.<br/>";
		$valid=1;
	}
	
	
	if(!isset($gender)){
		echo "Please select a gender.<br/>";
		$valid=1;
	}
		if(strlen($phone)!=10){
			echo "Phone no. is not valid.</br>";
			$valid=1;
		}
		if(strlen($user)==0)
		{
			echo "please enter your username.<br/>";
			$valid=1;
		}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo "your email is not valid.<br>";
			$valid=1;
		}
		if(strlen($pass)<=6)
		{
			echo "you must insert pasword at least 6 cahrecter.";
			$valid=1;
		}echo "</center></center>";
	if($valid==1){
		$default=$_POST;
		echo "<html><body ><form method='post'style='background-color:black;margin-top:0px;' action='$_SERVER[PHP_SELF]' id='registration'>";
  echo "<h3 style='margin:0px;margin-bottom:0px;color:yellow;'>Signup Here</h3>
  <input type='text' name='name' placeholder='Name' id='button' value='".htmlentities($default['name'])."'><br><br>
  <input type='text' name='address' placeholder='Address' id='button' value='".htmlentities($default['address'])."'><br><br>
  <input type='text' name='age' placeholder='Age' id='button' value='".htmlentities($default['age'])."'><br><br>
  <input type='text' name='phone' placeholder='Phone_no' id='button' value='".htmlentities($default['phone'])."'><br><br>
  <input type='radio' name='gender' value='male' ><a style='color:white'>Male</a>
 <input type='radio' name='gender' value='female'><a style='color:white'>Female</a><br><br>
  <input type='text' name='user' placeholder='Username' id='button' value='".htmlentities($default['user'])."'><br><br>
  <input type='text' name='email' placeholder='Email' id='button' value='".htmlentities($default['email'])."'><br><br>
  <input type='password' name='pass' placeholder='Password' id='button' value='".htmlentities($default['pass'])."'><br><br>
  <input type='submit' value='Signup' id='but'>
  </form></body></html>";
	}
	else
	{
		$co=mysqli_connect("localhost","root","","tattoo1");
			if(!$co){
				die ("Sorry!Connection failed".mysqli_error());
			}
			$sql="INSERT INTO user(Name,Address,Age,Phone_no,Gender,Username,Email,Password) VALUES('$name','$address','$age','$phone','$gender','$user','$email','$pass')";
			/*$sql="CREATE TABLE Customer(Name VARCHAR(30) NOT NULL,Address VARCHAR(30) NOT NULL,Age INT(10),Phone_no VARCHAR(10),
		Username VARCHAR(10) NOT NULL,Email varchar(20) NOT NULL,password VARCHAR(10) NOT NULL)";?*/
			if(mysqli_query($co,$sql)){
				echo "<a href='boot1.php'> submit</a>";
			}
			else {
				echo "Error on inserting table".mysqli_error($co);
				
			}
				mysqli_close($co);
			}
			echo "</center>";
	?>
</body>
</html>
</div>
</table>
</body>
</html>
</div>
</body>
</html>
