<?php
	$con=mysqli_connect("localhost","root" ,"","tattoo1");
			if(!$con){
				die ("Sorry!Connection failed".mysqli_error());
			}
	$sql="CREATE TABLE Customer(Name VARCHAR(30) NOT NULL,Address VARCHAR(30) NOT NULL,Age INT(10),Phone_no VARCHAR(10),Gender VARCHAR(5) NOT NULL,
		Username VARCHAR(10) NOT NULL,Email varchar(20) NOT NULL,Password VARCHAR(10) NOT NULL)";
			if(mysqli_query($con,$sql)){
				header('location:signup1.php');
			}
			else {
				header('location:signup1.php');
				
			}
				mysqli_close($con);
?>

	