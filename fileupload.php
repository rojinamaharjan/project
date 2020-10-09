<html>
<head>
<style>
	div{
		margin-top:25%;
		margin-left: 40%;
		margin-right: 40%
			right: 40%;
			width:40%;
			height:40%;
			background-color:gray;
			border:solid;
			font-size: 30px;
	}
	p{
		color:red;
	}
	</style>
</head>
<body>
<div>
<form action="display.php" enctype="multipart/form-data" method="post">
<p>Select image :</P>
<p><input type="file" name="file"></p><br/>
<input type="submit" value="Upload" name="Submit1"> <br/></form>
</div>
</body>
</html>