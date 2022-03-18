<?php 
include('header.php');
	$id =  $_REQUEST['id'];
	$file = fopen('../model/user.txt', 'r');
	while(!feof($file))
	{
		$user = fgets($file);
		$userArray = explode('|', $user);
		if(trim($userArray[0]) == $id)
		{
			$editUser = $userArray;
			break;
		}	
	}
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
					<td><input type="text" name="username" value="<?=$editUser[1]?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$editUser[2]?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$editUser[3]?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>								
						<input type="radio" name="gender" value="Male"
						  <?php if (isset($editUser[4]) && $editUser[4] == "Male") echo "checked";?>> Male
						<input type="radio" name="gender" value="Female"
						  <?php if (isset($editUser[4]) && $editUser[4] == "Female") echo "checked";?>> Female
						<input type="radio" name="gender" value="Other"
						  <?php if (isset($editUser[4]) && $editUser[4] == "Other") echo "checked";?>> Other									
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>
					<input type="Date" name="dob"value="<?=trim($editUser[5])?>" size="1px">
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