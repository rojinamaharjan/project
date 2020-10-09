<htmL>
	<head>
	<style type="text/css">
		table{
			margin-top: 10%;
			background-color: silver;
			border-radius: 10px;
			width:15%;
			height: auto;
			font-size: 18px;
		}
    </style>
</head>
	<body>
	<center>
		<table>
		<form method="post" action="ss1.php">
		<tr><th>C_id:</th><th><input type="text" name="cid"></th></tr>
		<tr><th>Firstname:</th><th><input type="text" name="fname"></th></tr>
		<tr><th>Lastname:</th><th><input type="text" name="lname"></th></tr>
		<tr><th>Address:</th><th><input type="text" name="address"></th></tr>
		<tr><th>Phone:</th><th><input type="text" name="phone"></th></tr>
		<tr><th>Email:</th><th><input type="text" name="email"></th></tr>
		<tr><th>Password:</th><th><input type="password" name="password"></th>
		<tr><th>Time:</th><th><select name="Month">
					<option value="Jan">Jan</option>
					<option value="Feb">Feb</option>
					<option value="Mar">Mar</option>
					<option value="Apr">Apr</option>
					<option value="May">May</option>
					<option value="Jun">Jun</option>
					<option value="Jul">Jul</option>
					<option value="Aug">Aug</option>
					<option value="Sep">Sep</option>
					<option value="Oct">Oct</option>
					<option value="Nov">Nov</option>
					<option value="Dec">Dec</option>
			
			</select>
			<select name="Day">
				<option value="Sun">Sun</option>
				<option value="Mon">Mon</option>
				<option value="Tue">Tue</option>
				<option value="Wed">Wed</option>
				<option value="Thu">Thu</option>
				<option value="Fri">Fri</option>
				<option value="Sat">Sat</option>
			</select>
			<select name="hour">
				<option value="10am">10am</option>
				<option value="11am">11am</option>
				<option value="12pm">12pm</option>
				<option value="1pm">1pm</option>
				<option value="2pm">2pm</option>
				<option value="3pm">3pm</option>
				<option value="4pm">4pm</option>
				<option value="5pm">5pm</option>
				<option value="6pm">6pm</option>
				<option value="7pm">7pm</option>
				<option value="8pm">8pm</option>
				<option value="9pm">9pm</option>
				</select></th></tr>
	<tr><th><input type="submit" value="Submit"></th></tr>
</table>
	</center>

		</form>
	</body>
</html>