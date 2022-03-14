<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<center>
	<fieldset style="width:80%;border-width:10px;border-color:mediumslateblue;">
	<center>
	 <h1  style="width:100%;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Dashboard.php" style="color: white; ">Home</a>
		</h1>
	</center>
	<form method="POST" action="../controller/regCheck.php">
		<center>
		<fieldset style="height:80%;width:70%;border-width:10px;border-color:mediumseagreen;">
			<legend style="color:green; font-size:25;margin: 10%; text-align:left;"><b>Registration</b></legend>
			<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
			<table align="center" width="80%">
				<tr>
					<td style="color:blue;">Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td style="color:blue;">Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td style="color:blue;">Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td style="color:blue;">Gender</td>
					<td>								
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
							<input type="radio" name="gender" value="Other"> Other
														
					</td>
				</tr>
				<tr>
					<td style="color:blue;">Date Of Birth</td>
					<td>
						<input type="Date" name="dob" value="" size="1px">(mm/dd/yyyy) 
					</td>
				</tr>
				<tr>
					<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" style="cursor: pointer;font-size:15;"></td>
				</tr>
			</table>
		</fieldset>
	</center>
	</form>
	</fieldset></center>
</body>
</html>