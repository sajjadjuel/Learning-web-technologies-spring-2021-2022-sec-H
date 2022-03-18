<?php

	$name=$_REQUEST['name'];
	//$password=$_REQUEST['password'];
		$file=fopen('../model/user_F.txt', 'r');
		//$user=fread($file, filesize('../models/user_F.txt'));
		while(!feof($file))
		{
			$user=fgets($file);
			$abc = explode('|', $user);
			//$abc = explode('|', $user);
		if (trim($abc[1]==$name))
		{
			//$_SESSION['status']='true';
			$pass=$abc[2];
			$email=$abc[3];
			$gen=$abc[4];
			$dob=$abc[5];

		}

			}
		//fclose($file);
		

?>
<html>
	<head>
		<title>View Profile</title>
	</head>
	<body>
		
		<form method="POST" action="">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:25;margin: 10%; text-align:left; " >View PROFILE</legend>
					<table align="center" width="100%" >

						<tr height="80px" style="background:lightcyan;">
							<td style="color:green; font-size:25;margin: 10%; text-align:left; font-family:Lucida Handwriting; ">Marketplace </td>
							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:right; "><p>Logged in as <a href="viewProfile.php"><?=$name?></a>| </p></td>


							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:rLeft; "><a href="../controller/logout.php">Logout</a> </td>
						</tr>
						<tr height ="250px">
							<td><ul>
								<li><a href="Fdashboard.php?name=<?=$name?>">Dashboard</a></li>
								<li><a href="#">View Profile </a></li>
								<li><a href="editProfile.php?name=<?=$name?>">Edit Profile</a></li>
								<li><a href="protfolio.php?name=<?=$name?>">Add Protfolio</a></li>
								<li><a href="jobApply.php?name=<?=$name?>">Job Apply</a></li>
								<li><a href="">Communicate With Client</li></a>
								<li><a href="account.php?name=<?=$_REQUEST['name']?>">Account</a></li>
								<li><a href="">withdraw Account</a></li> </p></td>
								<td colspan="2" style="color:green;"><fieldset>
							<legend style="border-color: green">View PROFILE</legend>
								<table>
									<tr>
										<td style="color:green;font-size:20;"><b>Name</b></td>
										<td width="50%"><input type="name" name="name" value="<?=$name?> "></td>
										</tr>
									<tr>
										<td colspan="2"><hr style="height:1px;background-color:mediumseagreen;"></td>
										</tr>
										<tr>
										<td style="color:green;font-size:20;"><b>Email</b></td>
										<td><input type="email" name="email" value="<?=$email?>"></td>
										</tr>
											<tr>
										<td colspan="2"><hr style="height:1px;background-color:mediumseagreen;"></td>
										</tr>

											<tr>
										<td style="color:green;font-size:20;"><b>Gender</b></td>
											<td colspan="2" style="color:green;">
											<input type="radio" name="gender" value="Male"<?php if($gen=='Male')echo "checked" ?>/>Male
						   					<input type="radio" name="gender" value="Female"<?php if($gen=='Female')echo  "checked"  ?>/>Female
										   <input type="radio" name="gender" value="Other"<?php if($gen=='Other')echo  "checked"   ?>/>other
				           
				          				  </td>
				       				 </tr>
				      			  <tr>
									<td colspan="2"><hr style="height:1px;background-color:mediumseagreen;"></td>
								</tr>

							<tr>
								<td style="color:green;font-size:20;"><b>Date of Birth</b></td>
							<td style="color:green;">
							<input type="text" name="text" value="<?=$dob?>"><p>(dd/mm/yyy)</p></td>
				         
						</tr>
					
						<tr>
							<td colspan="2"><hr style="height:1px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td colspan="2"><a href="editProfile.php?name=<?=$name?>">Edit Profile</td>
						</tr>
					</table>
				   </fieldset>
				  </td>
							
					</tr>
						<tr>
							<td colspan="3" align="center" height="50px" style="background:mediumseagreen;">
								<h4 style="color: white;font-size:15;width:35%;height:10%;text-align: center;" >Copyright&copy2017<h4>
							</td>
						</tr>
				</fieldset>
			</center>
		</form>
	</body>
</html>