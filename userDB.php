<?php
	$con=mysqli_connect("localhost","root","");
			if(!$con){
				die ("Sorry!Connection failed".mysqli_connect_error());
			}
	$sql="CREATE DATABASE user";
		if(mysqli_query($con,$sql)){
				echo "database created successfully";
		}
		else {
				echo "erorr on database creating".mysqli_erorr($con);
		}
				mysqli_close($con);
?>

	
