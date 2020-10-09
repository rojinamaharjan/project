<?php
include("demo.php");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$text=$_POST['text'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<P align='center'>File is not an image.</p>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<P align='center'>Sorry, file already exists.</p>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<P align='center'>Sorry, your file is too large.</P>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<P align='center'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</P>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<P align='center'>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
    $con=mysqli_connect("localhost","root","","tattoo1");
     if(!$con){
        die("Sorry".mysqli_connect_error());
     }
     echo "<P align='center'>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. </p>";
    $sql="INSERT INTO image(image,text1)VALUES('$target_file','$text')";
    $result=mysqli_query($con,$sql);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    } else {
}
}
?>