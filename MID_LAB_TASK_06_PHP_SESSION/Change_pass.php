<?php 
session_start();
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			
					
			if($user['username']!= null){
				$_SESSION['status'] = 'true';
				$username=$user['username'];
				$name = $user['name'];
				$email = $user['email'];
				$gender = $user['gender'];
				$dob = $user['dob'];
				$pass = $user['password'];
				if(isset($_REQUEST['submit'])){
					$cpass = $_REQUEST['password'];
					$npass = $_REQUEST['npass'];
					$cpass = $_REQUEST['cpass'];
						if($pass == $_REQUEST['password'] ){
							if ($npass==$cpass && $npass !=null) {
								$user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$npass, 'gender'=>$gender, 'dob'=>$dob];
								$_SESSION['user'] = $user;
								header('location: Dashboard.php');

							}
								else{
							echo "password MisMatch";
								
						}
						}else{
							echo " Current password is not Correct";
						}
					}
				

			}

		}else{
			echo "Plese login First";
		}
?>

<html>
<head>
	<title>CHANGE PASSWORD</title>
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
						<li><a href="Change_profile.php">Edit Profile</a></li>
						<li><a href="#">Change Profile Picture</a></li>
						<li><a href="#">Change Password</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
					<td colspan="2">
						<table border="0" width="100%" align="center">
							<tr>
								<td>
									<form method="POST" action="">
										<fieldset>
											<legend><b>CHANGE PASSWORD</b></legend>
											<table>
												<tr>
													<td>Current Password : </td>
													<td colspan="2"><input type="Password" name="password" value=""></td>
												</tr>
												<tr>
													<td>New Password : </td>
													<td colspan="2"><input type="Password" name="npass" value=""></td>
												</tr>
												<tr>
													<td>Re-Type New Password : </td>
													<td colspan="2"><input type="Password" name="cpass" value=""></td>
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

