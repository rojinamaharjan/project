<?php
	$con=mysqli_connect("localhost","root" ,"","user");
			if(!$con){
				die ("Sorry!Connection failed".mysqli_error());
			}
	$sql="CREATE TABLE Customer(user_id int(3) primary key AUTO_INCREMENT,
		Name VARCHAR(30) NOT NULL,Address VARCHAR(30) NOT NULL,Age INT(10),Phone_no VARCHAR(10),Gender VARCHAR(5) NOT NULL,
		Username VARCHAR(10) NOT NULL,Email varchar(20) NOT NULL,Password VARCHAR(10) NOT NULL)";
			if(mysqli_query($con,$sql)){
				echo "table created successfully";
			}
			else {
				echo "error";
			}
				mysqli_close($con);
?>

	