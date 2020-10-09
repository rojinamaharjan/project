<html>
<body>	
	<?php
	include('demo.php');
    echo "<br></br>";
	$con=mysqli_connect("localhost","root","","tattoo1");
	if(!$con)
	{
		die ("Sorry!Connection failed".mysqli_connect_error());
	}
	$sql="SELECT * FROM shop";
	$result=mysqli_query($con,$sql);
		while($rows=mysqli_fetch_assoc($result)){
			echo "<html>
							<body>";
							echo "<div style='
							//background-color:#f4aa1e;
							padding-left:4%;
								text-display:block;
								margin top:0px;
								//padding:0px;
								width:24%;
								height:43%;
								//margin-bottom:10%;	
								margin:0%;
								margin-left:2%;
								float:left;
								text-style:Bold Fraktur;
								border-style:dotted;
								border-color:black;
								 outline-offset: 15px;
								border-radious:3px;
										'>
								<ul type='none'>";
									echo "<img src='".$rows['image']."'alt='New York' width='200'height='150'>";
										echo "<li>shop_name:".$rows['Shop_name']."</li>";
										echo "<li>Address:".$rows['Address']."</li>";
										echo "<li>Working_time:".$rows['Working_time']."</li>";
										echo "<li>Owner:".$rows['Owner']."</li>";
										echo "<li>Contact:".$rows['Contact']."</li>";
										echo "<form method='post'action='app.php'>";
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