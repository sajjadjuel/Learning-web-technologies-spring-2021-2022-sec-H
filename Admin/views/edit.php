<?php 
include('header.php');
	$id =  $_REQUEST['id'];
	require('../model/AdminModel.php');
	$editUser=getClient($id);
?>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="clientlist.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="../controller/editCheck.php?id=<?=$id?>">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$editUser['name']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$editUser['password']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$editUser['email']?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>								
						<input type="radio" name="gender" value="Male"
						  <?php if (isset($editUser['gender']) && $editUser['gender'] == "Male") 
						  echo "checked";?>> Male
						<input type="radio" name="gender" value="Female"
						  <?php if (isset($editUser['gender']) && $editUser['gender'] == "Feale") 
						  echo "checked";?>> Female
						<input type="radio" name="gender" value="Other"
						  <?php if (isset($editUser['gender']) && $editUser['gender'] == "Other")
						   echo "checked";?>> Other									
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>
					<input type="Date" name="dob"value="<?=trim($editUser['dob'])?>" size="1px">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>