<?php 
	include_once('Condition.php');
?>
<html>
	<head>
		<title>Online Marketplace</title>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<form method="POST" action="../controller/HireCheck.php">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Hire Requirement</b></legend>
					<table align="center" width="80%" >
						<tr>
							<td style="color:green;font-size:20;"><b>Salary</b></td>
							<td width="50%"><input type="number" name="sal" value=" "></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Work Category</b></td>
							<td>
										<select name="category">
											<option value="">Logo Designer</option>
											<option value="">Web Developer</option>
											<option value="">Web Designer</option>
											<option value="">Content Creater</option>
										</select> 
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b> Payment Method: </b></td>
							<td>
										<select name="method">
											<option value="">Paypal</option>
											<option value="">Bkash</option>
											<option value="">Credit/Debit</option>
											<option value="">Visa</option>
										</select> 
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" >
								<input type="submit" name="request" value="Request" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
							</td>
						</tr>
					</table>
				</fieldset>
			</center>
		</form>
	</body>
</html>