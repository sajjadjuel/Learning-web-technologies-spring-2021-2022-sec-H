<?php 
	
	include('Condition.php');

		if(isset($_GET['email']))
		{
			$id = $_GET['email'];

			$file = fopen('../model/info.txt', 'r');

			while (!feof($file))
			 {
				$user = fgets($file);
				$userArray = explode('|', $user);
				if($userArray[3] == $email)
				{
					//var_dump($userArray);
					break;
				}
			}
			fclose($file);
		}
	
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
		<form method="POST" action="../controller/ProfileCheck.php" enctype="multipart/form-data">
			<center>
				<fieldset style="height:90%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 6%; text-align:left; " ><b>Profile</b></legend>
					<table align="center" width="80%">
						<tr>
							<td>
								<img src=" " style="height:150px;width:150px;">
							</td>
							<td>
								<input type="file" name="myfile">
								<input type="submit" name="upload" value="Upload">
							</td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Name</b></td>
											<?php 
												$file = fopen('../model/info.txt', 'r');
												
												while (!feof($file)) {
													$user = fgets($file);
													if($user == null){
														break;
													}
													
													$userArray = explode("|", $user);
											?>

							<td width="50%"><input type="text" name="username" value="<?=$userArray[0]?>"></td>
										<?php
												}
											?>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Gender</b></td>
											<?php 
												$file = fopen('../model/info.txt', 'r');
												
												while (!feof($file)) {
													$user = fgets($file);
													if($user == null){
														break;
													}
													
													$userArray = explode("|", $user);
											?>
							<td width="50%">
								<input type="text" name="gender" value="<?=$userArray[1]?>">
							</td>
											<?php
												}
											?>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						<tr>
							<td style="color:green;font-size:20;"><b>Date of Birth</b></td>
											<?php 
												$file = fopen('../model/info.txt', 'r');
												
												while (!feof($file)) {
													$user = fgets($file);
													if($user == null){
														break;
													}
													
													$userArray = explode("|", $user);
											?>
							<td width="50%"><input type="date" name="dob" value="<?=$userArray[2]?>"></td>
											<?php
												}
											?>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Email</b></td>
											<?php 
												$file = fopen('../model/info.txt', 'r');
												
												while (!feof($file)) {
													$user = fgets($file);
													if($user == null){
														break;
													}
													
													$userArray = explode("|", $user);
											?>
							<td width="50%"><input type="email" name="email" value="<?=$userArray[3]?>"></td>
											<?php
												}
											?>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Password</b></td>
											<?php 
												$file = fopen('../model/info.txt', 'r');
												
												while (!feof($file)) {
													$user = fgets($file);
													if($user == null){
														break;
													}
													
													$userArray = explode("|", $user);
											?>
							<td><input type="password" name="pass" value="<?=$userArray[0]?>"></td>
											<?php
												}
											?>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Edit Profile" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;margin:15%;"></td>
							<td><input type="submit" name="submit" value="Delete Profile" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;margin:15%;"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="../view/ResetPass.php" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;"> Change Password </a>
							</td>
						</tr>
				</fieldset>
			</center>
		</form>
	</body>
</html>