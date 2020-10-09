<html>
<head>
	<style type="text/css">
	div{
		width:20%;
		height:20%;
		float:left;
	}
	</style>
</head>
<body>
	<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "uploads/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)>0) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>
</body>
</html>