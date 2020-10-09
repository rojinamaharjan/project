<?php
	$con=mysqli_connect("localhost","root","","tattoo1");
			if(!$con){
				die ("Sorry!Connection failed".mysqli_connect_error());
			}
	$sql="CREATE TABLE Apppointment(C_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									Firstname VARCHAR(30) NOT NULL,
									Lastname VARCHAR(25) NOT NULL,
									Address VARCHAR (40) NOT NULL,
									Phone VARCHAR(10),
									Email VARCHAR(50),
									Password VARCHAR(12))";
		if(mysqli_query($con,$sql)){
				echo "Table created successfully";
		}
		else{
			 "Error creating table".mysqli_error($con);
			}
		mysqli_close($con);
?>