<?php 
session_start();
			if(isset($_REQUEST['submit'])){
			$Ffile = fopen('../model/user_F.txt', 'r');	
			if($_SESSION['status'] = 'true'){		
				$Ffile = fopen('../model/user_F.txt', 'r');
				$userid=$_REQUEST['id'];
					
					while(!feof($Ffile))
						{
							$user = fgets($Ffile);
							$userArray = explode('|', $user);
							if(trim($userArray[0]) == $userid){
								$editUser = $userArray;
								break;
							}
						}	
					if($_REQUEST['npass']!=null)
					{
						$npass = $_REQUEST['npass'];
						$cpass = $_REQUEST['cpass'];
						$npass = $_REQUEST['npass'];
						$cpass = $_REQUEST['cpass'];
						$id = $userArray[0];
						$password = $cpass;
						$username = $userArray[1];
						$email = $userArray[3];
						$gender = $userArray[4];
						$dob = $userArray[5];

					}		
					}
					//$cpass = $_REQUEST['cpass'];
					
							if ($npass==$cpass) {
								
								if($username != null && $password != null && $email != null){			
								$file = fopen('../model/user_F.txt', 'r');
								$fuser = "";
								while(!feof($file)){
									$upUser = fgets($file);
									$user = explode('|', $upUser);									
									if($user[0] == $id){
									$upUser = $id."|".$username."|".$password."|".$email."|".$gender."|".$dob;
									}
									$fuser .= $upUser;								
								}

								$file = fopen('../model/user_F.txt', 'w');
								fwrite($file, $fuser);

							}
							else{
								echo "null submission";
							}
								

								header('location: ../views/Dashboard.php');

							}
								else{
								echo "password MisMatch";
									
								}
			}

?>

<html>
<head>
	<title>Password Reset</title>
</head>
<body>
<pre>

		<table border="1" width="40%" align="center">
			<tr height="80px">
				<td align="center"> <h1>Marketplace</h1></td>
				<td align="right" colspan="2">
					<a href="../views/Dashboard.php">Home|</a>
					<a href="../views/reg.php">Registration</a>
				</td>
			</tr>
			<tr>
					<ul>
					</ul>
					<td colspan="2">
						<table border="0" width="100%" align="center">
							<tr>
								<td>
									<form method="POST" action="">
										<fieldset>
											<legend><b>FOGET PASSWORD</b></legend>
											<table>
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
				<td colspan="3" align="center"> copyright @ Group 11[H]</td>
			</tr>
		</table></pre>
</body>
</html>

