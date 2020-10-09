<?php
	$con=mysqli_connect("localhost","root" ,"","owner");
			if(!$con){
				die ("Sorry!Connection failed".mysqli_error());
			}
	$sql="CREATE TABLE Customer(owner_id int(3) primary key AUTO_INCREMENT,
		Name VARCHAR(30) NOT NULL,Address VARCHAR(30) NOT NULL,Phone_no VARCHAR(10),
		Email varchar(20) NOT NULL,Password VARCHAR(10) NOT NULL)";
			if(mysqli_query($con,$sql)){
				echo "table created successfully";
			}
			else {
				echo "error";
			}
				mysqli_close($con);
?>

	