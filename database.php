<?php
	$con=mysqli_connect("localhost","root","");
			if(!$con){
				die ("Sorry!Connection failed".mysqli_connect_error());
			}
	$sql="CREATE DATABASE tattoo1";
		if(mysqli_query($con,$sql)){
				header('location:table.php');
		}
		else {
				header('location:table.php');
		}
				mysqli_close($con);
?>

	
