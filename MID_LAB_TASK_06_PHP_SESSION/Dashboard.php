<?php 
session_start();
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			
					
			if($user['username'] != null){
				$_SESSION['status'] = 'true';
				$username=$user['username'];
				$name=$user['name'];
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
						<li><a href="#">Dashboard</a></li>
						<li><a href="Profile.php">View Profile</a></li>
						<li><a href="Change_profile.php">Edit Profile</a></li>
						<li><a href="#">Change Profile Picture</a></li>
						<li><a href="Change_pass.php">Change Password</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>
					<td><h2>Welcome <?=$name?></h2> </td>
			</tr>								
			<tr height="50px">
				<td colspan="3" align="center"> copyright @ 2017</td>
			</tr>
		</table></pre>
</body>
</html>

