<html>
	<head>
        <style>
        body{
            background-color:color-redient(red,white);
        }
table{
    font-style: italic;
    font-weight: 10px;
    text-align:justify;
    margin-left: 30px;
    margin-right:50px;
    margin-top: 20%;
    background-color:silver;
    display: block;
    width:30%;
    height:30%;
    border-radius:10px;
    }
th{
    font-size: 30px;
    }
    b{
        border-radius: 3px;
        background-color: blue;
    }
     </style>
    <body>
        <?php
            include("navigation.html");
            ?>
         <center>
			<table>
                <tr><td><h1 align="center" font=7>Customer Login</h1><td></tr>
			<form method="post" action="signin1.php">
			<tr><th>Email:</th><th><b><input type="email" name="email" color="blue"></b><th></tr>
			<tr><th>Password:</th><th><b><Input type="password" name="pass"></b></th></tr>
			<tr><th><button><a class="active"><input class="button" type="submit" class="button" value="login">
            </button></a></th></tr>
			</form>
			</table>
		</center>
		</body>
	</head>
</html>
