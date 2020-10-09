<!DOCTYPE html>
<Html>
<Head>
<Title>Image uploaded</title>
<Link rel="stylesheet" type="text/css" href="style.css">
</Head>
<Body>
<div id="content">
<?php
$db=mysqli_connect("localhost","root","","tattoo1");
$sql="SELECT *FROM images";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
		{	
			echo "<center>";
			echo "<html>
							<body>
								<div> 
									<tr>
										<div>Name</div>
										<div>Address</div>
									</div>";
while($rows=mysqli_fetch_assoc($result)){
echo "<div id='image_div'>";
echo "<img src='".$row['image']."'>";
echo "<p>".$row['text']."</p>";
echo"</div>";
}
echo "</table></body></html>";
	echo "</center>";
}
?>
</div>
</body>
</html>