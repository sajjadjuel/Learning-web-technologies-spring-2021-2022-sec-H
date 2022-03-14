<?php 
	include('Condition.php');

	$id = $_GET['id'];

	$file = fopen('../model/user.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>
<html>
<head>
	<title>Online Market</title>
</head>
<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
	<form method="POST" action="../controller/Remove.php">
		<center>
			<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Remove Employee</b></legend>
						<table border="5" align="center" style="border-color: mediumseagreen; height:40%;width:80%;">
								<tr>
									<td>Username</td>
									<td><?=$userArray[1]?></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><?=$userArray[4]?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><?=$userArray[3]?></td>
								</tr>
								<tr>
										<td colspan="2" align="center">
													<input type="submit" name="remove" value="Remove" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
										</td>
								</tr>
						</table>
			</fieldset>
		</center>
				
	</form>
</body>