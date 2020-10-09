<?php
If(isset($_POST['upload'])){
$target="uploads/".basename($_FILES['image']['name']);
$db=mysqli_connect("localhost","root","","tattoo1");
$image=$_FILES['image']['name'];
$text=$_POST['text'];
$sql="INSERT INTO images(image,text)VALUES('$image','$text')";
if(mysqli_query($db,$sql)>0){
if(move_uploaded_file($_FILES['image']['name'],$target)){
$msg="Image uploaded successfully";
}
else{
$msg="There was a problem uploading image";
}
}
}
?>