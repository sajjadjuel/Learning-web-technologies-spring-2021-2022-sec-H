<?php 
session_start();

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];

		if($email != null){
		
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}
					
			if($user['email'] == $email){
				$_SESSION['status'] = 'true';

				header('location: Forgot_Change.php');
			}else{
				echo "invalid email";
			}

		}else{
			echo "null submission..";
		}
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
				<td align="right" colspan="2"> 
					<a href="home.php">Home|</a>
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
				<td colspan="3" align="center"> copyright @ 2017</td>
			</tr>
		</table></pre>
</body>
</html>

