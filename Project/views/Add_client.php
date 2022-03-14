<?php 
	include('header.php');
?>

<html>
<head>
	<title>Add User</title>
</head>
<body>

	<a href="Dashboard.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="../controller/ClientCheck.php" enctype="multipart/form-data">
		<fieldset style="width:60%;">
			<legend>Add New</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>								
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
							<input type="radio" name="gender" value="Other"> Other									
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>
						<input type="Date" name="dob" value="" size="1px">
					</td>
				</tr>
				<tr>

					<td>
							Image:</td><td> <input type="file" name="myfile">
					</td>

			</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>