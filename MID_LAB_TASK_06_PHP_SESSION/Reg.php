<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>

		<table border="1" width="50%" align="center">
			<tr height="80px">
				<td align="left"> <h1>XCompany</h1></td>
				<td align="right" colspan="2"> 
					<a href="home.php">Home|</a>
					<a href="Login.php">Login|</a>
					<a href="">Registration</a>
				</td>
			</tr>

			<tr><td colspan="2">
				<table border="0" width="60%" align="center">
					<tr>
						<td>
						
							<form method="POST" action="Reg_chk.php">
								<fieldset>
									<legend><b>Registration</b></legend>
										<table align="center" width="80%">
											<tr>
												<td>Name      :</td>
												<td colspan="2"><input type="text" name="name" value=""></td>

											</tr>

											<tr><td colspan="3"><hr></td></tr>
											<tr>
												<td>Email       :</td>
												<td><input type="email" name="email" value=""></td>
											</tr>
											<tr><td colspan="3"><hr></td></tr>
											<tr>
												<td>Username    :</td>
												<td colspan="2"><input type="text" name="username" value=""></td>

											</tr>

											<tr><td colspan="3"><hr></td></tr>
											<tr>
												<td>Password       :</td>
												<td><input type="password" name="password" value=""></td>
											</tr>
											<tr><td colspan="3"><hr></td></tr>

											<tr>
												<td>Confirm Password       :</td>
												<td><input type="password" name="cpassword" value=""></td>
											</tr>
											<tr><td colspan="3"><hr></td></tr>

											<tr><td colspan="2">
												<fieldset>
													<legend >Gender</legend>
													
															    <input type="radio" name="gender" value="Male"> Male
																<input type="radio" name="gender" value="Female"> Female
																<input type="radio" name="gender" value="Other"> Other
														
												</fieldset></td>
											</tr>
											<tr><td colspan="3"><hr></td></tr>

											<tr><td colspan="2">
												<fieldset>
													<legend >Date Of Birth</legend>
															 <input type="Date" name="dob" value="" size="1px">(mm/dd/yyyy) 
												</fieldset></td>
											</tr>
											<tr><td colspan="3"><hr></td></tr>

									
											<tr>
												<td><input type="submit" name="submit" value="Submit">
													<input type="reset" name="reset" value="Reset"></td>
											</tr>


										</table>
								</fieldset>
							</form>
						</td>
					</tr>
				</table></td>
			

			</tr>

			<tr height="50px">
				<td colspan="2" align="center"> copyright @ 2017</td>
			</tr>
		</table>
</body>
</html>

