<?php 
	$user=$_POST['email'];
	$pass=$_POST['pass'];
	$login=$_POST['login'];
	if(strcmp($login,"user")==0){
	 $con=mysqli_connect("localhost","root","","tattoo1");
	 if(!$con){
	 	die("Sorry".mysqli_connect_error());
	 }
	 $sql="SELECT * FROM user WHERE email='$user' AND password='$pass'";
	 $result=mysqli_query($con,$sql);
	 if(mysqli_num_rows($result)>0)
	 {
	 	header('location:shop.php');
	 }
	 else{
	 	header('location:boo2.php');
	 }
	 mysqli_close($con);
	}
	else{
	$con=mysqli_connect("localhost","root","","tattoo1");
	 if(!$con){
	 	die("Sorry".mysqli_connect_error());
	 }
	 $sql="SELECT * FROM owner WHERE email='$user' AND password='$pass'";
	 $result=mysqli_query($con,$sql);
	 if(mysqli_num_rows($result)>0)
	 {
	 	header('location:shop.php');
	 }
	 else{
	 	header('location:boo2.php');
	 }
	 mysqli_close($con);
}
?>