<?php 
session_start();
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			
					
			if($user['username'] != null){
				$_SESSION['status'] = 'true';
				$username=$user['username'];
				$name=$user['name'];
				$email = $user['email'];
				$gender =$user['gender'];
				$dob =$user['dob'];
			}else{
				echo "invalid login";
			}

		}else{
			echo "Plese login First";
		}
?>

<html>
<head>
	<title>PROFILE</title>
</head>
<body>
<pre>

		<table border="1" width="40%" align="center">
			<tr height="80px">
				<td align="left"> <h1>XCompany</h1></td>
				<td align="right" colspan="2"> Logged in as
					<a href="#"><?=$username?>|</a>
					<a href="Logout.php">Logout</a>
				</td>
			</tr>
			<tr>
				<td> <h3><pre> Account</pre></h3>
					<hr>
					<ul>
						<li><a href="Dashboard.php">Dashboard</a></li>
						<li><a href="#">View Profile</a></li>
						<li><a href="Change_profile.php">Edit Profile</a></li>
						<li><a href="">Change Profile Picture</a></li>
						<li><a href="Change_pass.php">Change Password</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
					<td colspan="2">
						<table border="0" width="90%" align="center">
							<tr>
								<td>
									<form method="POST" action="login_chk.php">
										<fieldset>
											<legend><b>PROFILE</b></legend>
											<table>
												<tr>
													<td>Name : <?=$name?></td>
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td>Email :<?=$email?></td>													
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td>Gender :<?=$gender?></td>	
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td>Date Of Birth :<?=$dob?></td>													
												</tr>
												<tr><td colspan="2"><hr></td></tr>
												<tr>
													<td><a href="Change_profile.php">Edit Profile</a></td>													
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

