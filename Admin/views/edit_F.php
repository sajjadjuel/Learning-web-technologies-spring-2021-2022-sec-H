<?php 
include('header.php');
require('../model/AdminModel.php');
	$id =  $_REQUEST['id'];
	$editUser=getFreelancer($id);

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];

		if($username != null && $password != null && $email != null){
			
			updateFreelancer($id, $username, $password, $email, $gender, $dob);
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
						<input type="Date" name="dob" value="<?=trim($editUser['dob'])?>" size="1px">(mm/dd/yyyy)
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