<html>
	<head>
		<title>Online Marketplace</title>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		</h1>
		<form method="POST" action="../controller/SignupCheck.php">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 6%; text-align:left; " ><b>Sign Up</b></legend>
				<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
					<table align="center" width="80%" >
						<tr>
							<td style="color:green;font-size:20;"><b>Name</b></td>
							<td width="50%"><input type="text" name="username" value=" "></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Gender</b></td>
							<td width="50%">
								<input type="radio" name="gender" value="female"> Female
								<input type="radio" name="gender" value="male"> Male
								<input type="radio" name="gender" value="other"> Other
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						<tr>
							<td style="color:green;font-size:20;"><b>Date of Birth</b></td>
							<td width="50%"><input type="date" name="dob" value=""></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Email</b></td>
							<td width="50%"><input type="email" name="email" value=" "></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Password</b></td>
							<td><input type="password" name="pass" value=""></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Confirm Password</b></td>
							<td> <input type="password" name="Cpass" value=""></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="checkbox" name="condition" value=" " > I agree to the terms and condition
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" >
								<input type="submit" name="submit" value="Register" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
							</td>
						</tr>
				</fieldset>
			</center>
		</form>
	</body>
</html>