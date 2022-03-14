<?php 
include('header.php');
	$id =  $_REQUEST['id'];
	$file = fopen('../model/user_F.txt', 'r');
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

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];

		if($username != null && $password != null && $email != null){
			
			$file = fopen('../model/user_F.txt', 'r');
			$fuser = "";

			while(!feof($file)){
				$upUser = fgets($file);
				$user = explode('|', $upUser);
				
				if($user[0] == $id){
					$upUser = $id."|".$username."|".$password."|".$email."|".$gender."|".$dob."\r\n";
				}
				$fuser .= $upUser;
				
			}

			$file = fopen('../model/user_F.txt', 'w');
			fwrite($file, $fuser);
			header('location: ../views/F_List.php');

		}else{
			echo "null submission";
		}
	}
?>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="Dashboard.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="">
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
						  <?php if (isset($editUser[4]) && $editUser[4] == "Feale") echo "checked";?>> Female
						<input type="radio" name="gender" value="Other"
						  <?php if (isset($editUser[4]) && $editUser[4] == "Other") echo "checked";?>> Other									
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>
						<input type="Date" name="dob" value="<?=trim($editUser[5])?>" size="1px">(mm/dd/yyyy)
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