<html>
<body>	
<?php
    include("demo.php");
    echo "<br>";
	$con=mysqli_connect("localhost","root","","tattoo1");
	if(!$con)
	{
		die ("Sorry!Connection failed".mysqli_connect_error());
	}
	$sql="SELECT * FROM user";
	$result=mysqli_query($con,$sql);
		while($rows=mysqli_fetch_assoc($result)){
			echo "<html>
							<body>";
							echo "<div style='
								display:block;
								margin top:0px;
								margin-bottom:0px;
								padding:0px;
								width:20%;
								height:25%;
								margin:5%;
								font-size:100%;
								float:left;
										'>
								<ul type='none'>";
									echo "<img src='avatar.png'alt='New York' width='100'height='100'>";
										echo "<li>Name:".$rows['Name']."</li>";
										echo "<li>Address:".$rows['Address']."</li>";
										echo "<li>Age:".$rows['Age']."</li>";
										echo "<li>Email:".$rows['Email']."</li>";
										echo "<li>Phone_no:".$rows['Phone_no']."</li>";
										echo "<form method='post'action='appointment1.php'>";
										echo "<input type='submit' style='background-color:#f4511e;' value='appointment'>";
	/*while($rows=mysqli_fetch_assoc($result)){
		echo "<li><td>".$rows['Name']."</td><td>".$rows['Address']."</td><td>".$rows['Age']."</td><td>".$rows['Phone_no']."</td><td>".$rows['Gender'].
		"</td><td>".$rows['Username']."</td><td>".$rows['Email']."</td><td>".$rows['Password']."</td></li>";
	}*/
	echo "</div>";
}
	 mysqli_close($con);
?>
</body>
</html>