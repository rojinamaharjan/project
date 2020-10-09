<htmL>
	<head>
	<style type="text/css">
		.main{
			margin-top: 0%;
			background-color:black;
			color: white;
			border-radius: 10px;
			width: 30%;
			height: auto;
			font-size: 18px;
		}
		
		h1{
			margin-bottom: 2%;
		}
		.row{
				padding-left: 5%;
				padding-right:5%;
			}


		.row:after {
				content: "";
				display: table;
				clear: both;
			}
			
		.text {
			 	float: left;
			 	width: 9%;
			 	margin-top: 1%;
				padding-right: 20%;
			}	
		.value {
			 	float: left;
			 	width: 70%;
			 	margin-top: 6px;
				padding-left: 1%;
			}
		.valuex{
			float: left;
			 	width: 61%;
			 	margin-top: 6px;
		}
		
		/*Css for input fields*/
		.input-field{
			    width: 100%;
			    padding: 3%; 
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 16px;
		}


		.input-field:hover {
			  border: 1px solid #FF8C00;
		}
		
		.sbox{
			width: 32%;
			padding: 3%; 
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical
		}
		
		.sbox:hover {
			  border: 1px solid #FF8C00;
			 
		}
		
		
		/*This css is for submit button*/
		input[type=submit] {
			    background-color: #FFA500;
			    color: white;
			    padding: 2% 5%;
			    border: none;
			    border-radius: 6px;
			    cursor: pointer;
				margin-bottom:2%;
		}
		

		input[type=submit]:hover {
			    background-color: #FF8C00;
				zoom: 110%;
		}
		
		
		
		/*responsive*/
		@media screen and (max-width: 900px) {
				.text, .value, .valuex{
					width: 100%;
				    margin-top: 0;
				}
			}
		@media screen and (max-width: 900px) {
			.input[type=submit]{
				width: 95%;
				margin-top: 0;
			}
		}
		@media screen and (max-width: 900px) {
			.main{
				width: 95%;
				margin-top: 0;
			}
		}
		@media screen and (max-width: 900px) {
			.sbox{
				
				width: 32.9%;
				margin-top: 0;
				margin-right: 0;
			}
		}
		
    </style>
</head>
	<body>
		<?php
		include('demo.php');
		?>
	<center>
		<div class='main'>
			<h1>Appointment Form</h1>
			<form method="post" action="app1.php">
				<div class='row'>
				<div class='text'>C_id:</div>
				<div class='value'><input class='input-field' type="text" placeholder="C-ID" name="cid"></div>
				</div>
				<div class='row'>
				<div class='text'>Firstname:</div>
				<div class='value'><input class='input-field' type="text" placeholder="First name" name="fname"></div>
				</div>
				<div class='row'>
				<div class='text'>Lastname:</div>
				<div class='value'><input class='input-field' type="text" placeholder="Last name" name="fname"></div>
				</div>
				<div class='row'>
				<div class='text'>Address:</div>
				<div class='value'><input class='input-field' type="text" placeholder="Address" name="address"></div>
				</div>
				<div class='row'>
				<div class='text'>Phone:</div>
				<div class='value'><input class='input-field' type="text" placeholder="Phone" name="phone"></div>
				</div>
				<div class='row'>
				<div class='text'>Email:</div>
				<div class='value'><input class='input-field' type="text" placeholder="Email" name="email"></div>
				</div>
				<div class='row'>
				<div class='text'>Password:</div>
				<div class='value'><input class='input-field' type="password" placeholder="Password" name="password"></div>
				</div>
				<div class='row'>
				<div class='text'>Time:</div>
				<div class='valuex'>
					<select class="sbox" name="Month">
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
					<select class="sbox" name="Day">
						<option value="Sun">Sun</option>
						<option value="Mon">Mon</option>
						<option value="Tue">Tue</option>
						<option value="Wed">Wed</option>
						<option value="Thu">Thu</option>
						<option value="Fri">Fri</option>
						<option value="Sat">Sat</option>
					</select>
					<select class="sbox" name="hour">
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
					</select>
				</div>
				</div>
				
				<hr width=80%>
				<div class='row'>
				<input type="submit" value="Submit">
				</div>
			</form>
		</div>
	</center>
	</body>
</html>