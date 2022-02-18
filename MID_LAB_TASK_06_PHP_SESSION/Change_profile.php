<?php 
session_start();
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			
					
			if($user['username'] != null){
				$_SESSION['status'] = 'true';
				$username=$user['username'];
				$pname = $user['name'];
				$pemail = $user['email'];
				$pgender = $user['gender'];
				$pdob = $user['dob'];
				$password = $user['password'];
				if(isset($_REQUEST['submit'])){
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$gender = $_REQUEST['gender'];
					$dob = $_REQUEST['dob'];
						if($name !=null && $email != null && $gender != null && $dob != null){
								
								$user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob];

								$_SESSION['user'] = $user;
								header('location: Dashboard.php');

						}else{
							echo "null submission..";
						}
				}

			}else{
				echo "invalid login";
			}

		}else{
			echo "Plese login First";
		}
?>

<html>
<head>
	<title>First HTML Site</title>
</head>
<body>
<pre>

		<table border="1" width="40%" align="center">
			<tr height="80px">
				<td align="left"> <h1>XCompany</h1></td>
				<td align="right" colspan="2"> Logged in as
					<a href="Profile.php"><?=$username?>|</a>
					<a href="Logout.php">Logout</a>
				</td>
			</tr>
			<tr>
				<td> <h3><pre> Account</pre></h3>
					<hr>
					<ul>
						<li><a href="Dashboard.php">Dashboard</a></li>
						<li><a href="Profile.php">View Profile</a></li>
						<li><a href="#">Edit Profile</a></li>
						<li><a href="#">Change Profile Picture</a></li>
						<li><a href="Change_pass.php">Change Password</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
					<td colspan="2">
						<table border="0" width="100%" align="center">
							<tr>
								<td>
									<form method="POST" action="">
										<fieldset>
											<legend><b>EDIT PROFILE</b></legend>
											<table>
												<tr>
													<td>Name : </td>
													<td colspan="2"><input type="text" name="name" value="<?=$pname?>"></td>
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td>Email :</td>	
													<td><input type="email" name="email" value="<?=$pemail?>"></td>												
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td>Gender : </td>	
													<td colspan="2">													
														<input type="radio" name="gender" value="Male"<?php if (isset($user['gender']) && $user['gender'] == "Male") echo "checked";?>> Male
														<input type="radio" name="gender" value="Female"<?php if (isset($user['gender']) && $user['gender'] == "Feale") echo "checked";?>> Female
														<input type="radio" name="gender" value="Other"<?php if (isset($user['gender']) && $user['gender'] == "Other") echo "checked";?>> Other
														
													</td>
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td>Date Of Birth :</td>	
													<td colspan="2">												
														<input type="Date" name="dob" value="<?=$pdob?>" size="1px">(mm/dd/yyyy) 
													</td>												
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td><input type="submit" name="submit" value="Submit"></td>													
												</tr>
											</table>
										</fieldset>
									</form>
								</td>
							</tr>
						</table>
					</td>
			</tr>								
			<tr height="50px">
				<td colspan="3" align="center"> copyright @ 2017</td>
			</tr>
		</table></pre>
</body>
</html>

