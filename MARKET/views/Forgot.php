<?php 
session_start();

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
		$file = fopen('../model/user.txt', 'r');
		$Ffile = fopen('../model/user_F.txt', 'r');

		if($email != null){
		
			if ($_REQUEST['src']=='Freelancher') 
		{
		while(!feof($Ffile))
			{
				$user = fgets($Ffile);
				$userArray = explode('|', $user);

				if(trim($userArray[3]) == $email){
					$_SESSION['status'] = 'true';
				  header('location: ../controller/Forgot_Check_f.php?id='.$userArray[0]);
					break;
				}

			}	
		}
		elseif ($_REQUEST['src']=='Client')
		{
			while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);
				if ($email!=null)
				{
					if(trim($userArray[3]) == $email){
					$_SESSION['status'] = 'true';
					header('location: ../controller/Forgot_Check_c.php?id='.$userArray[0]);
					break;
					}
				  }

				else
				 {
					echo "Null";
					break;
				 }
			}	

		}
		else
		{
			echo "invalid";
		}

			}
					
			

		}
?>

<html>
<head>
	<title>FORGOT PASSWORD</title>
</head>
<body>
<pre>

		<table border="1" width="40%" align="center">
			<tr height="80px">
				<td align="left"> <h1>Marketplace</h1></td>
				<td align="right" colspan="2"> 
					<a href="Dashboard.php">Home|</a>
					<a href="Login.php">Login|</a>
					<a href="Reg.php">Registration</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table border="0" width="55%" align="center">
						<tr>
							<td>
								<form method="POST" action="">
									<fieldset>
										<legend><b>FORGOT PASSWORD</b></legend>
										<table>
											<tr>
												<select name="src"> Search =>
												<option value="Client">Client</option>
												<option value="Freelancher">Freelancer</option>
												
												</select><br>
												<hr>
												<td>Enter Email :</td>
												<td><input type="Email" name="email" value=""></td>
											</tr>								
											<tr><td colspan="2"><hr></td></tr>
											<tr>
												<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
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

