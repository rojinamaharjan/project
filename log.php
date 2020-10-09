<?php
session_start();
$con=mysqli_connect("localhost","root","","tattoo1");
     if(!$con){
        die("Sorry".mysqli_connect_error());
     }
$login = mysql_query("SELECT count(*) FROM customer WHERE (username = '" .       mysql_real_escape_string($_POST['user']) . "') and (password = '" .     mysql_real_escape_string(md5($_POST['pass'])) . "')");
$result=mysql_fetch_array($login);
// Check username and password match

 if (mysql_num_rows($result) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['user'];

// Jump to secured page
 header('Location: securedpage.php');
}
else {
// Jump to login page
header('Location:login.php');
}

?>