<?php 
session_start();
if(isset($_REQUEST['submit'])){

	$name=  $_REQUEST['name'];
	$file = fopen('../models/user_F.txt', 'r');
	while(!feof($file))
	{
		$user = fgets($file);
		$userArray = explode('|', $user);
		if(trim($userArray[0]) == $name)
		{
			$editUser = $userArray;
			break;
		}	
	}
}
?>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="../views/dashboard.php"> Back </a> |
	<a href="logout.php"> Logout </a>

	<form method="POST" action="../controller/FeditCheck.php?name=<?=$name?>">
		<fieldset>
			<legend>Edit User</legend>
			<table>
					<td>Password</td>
					<td><input type="email" name="email" value="<?=$editUser[1]?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="password" name="password" value="<?=$editUser[2]?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>								
						<input type="radio" name="gender" value="Male"
						  <?php if (isset($editUser[3]) && $editUser[3] == "Male") echo "checked";?>> Male
						<input type="radio" name="gender" value="Female"
						  <?php if (isset($editUser[3]) && $editUser[3] == "Feale") echo "checked";?>> Female
						<input type="radio" name="gender" value="Other"
						  <?php if (isset($editUser[3]) && $editUser[3]== "Other") echo "checked";?>> Other									
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>
					<input type="Date" name="dob"value="<?=trim($editUser[4])?>" size="1px">
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