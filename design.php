<html>
<body>	
<?php
    include("demo.php");
    echo "<br/>";
	$con=mysqli_connect("localhost","root","","tattoo1");
	if(!$con)
	{
		die ("Sorry!Connection failed".mysqli_connect_error());
	}
	$sql="SELECT * FROM design";
	$result=mysqli_query($con,$sql);
		while($rows=mysqli_fetch_assoc($result)){
			echo "<html>
							<body>";
							echo "<div style='
							//background-color:lightgreen;
								display:block;
								width:22%;
								height:45%;
								margin-left:2%;
								margin:0%;
								margin top:0px;
								font-size:18px;
								float:left;

								border-style:dotted;
								border-color:black;
								 outline-left: 15%;
								border-radious:3px;
										'>
								<ul type='none'>";
									echo "<img src='".$rows['image']."'alt='New York' width='200'height='200'>";
										echo "<li>Name:".$rows['Name']."</li>";
										echo "<li>Cost:".$rows['Cost']."</li>";
										echo "<form method='post'action='App.php'>";
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