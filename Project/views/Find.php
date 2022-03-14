<?php
include('header.php');
	if(isset($_COOKIE['status'])){
		if(isset($_REQUEST['submit']))
	{
		$username =  $_REQUEST['search'];
		$Ffile = fopen('../model/user_F.txt', 'r');
		$file = fopen('../model/user.txt', 'r');

		if ($_REQUEST['src']=='Freelancher') 
		{
		while(!feof($Ffile))
			{
				$user = fgets($Ffile);
				$userArray = explode('|', $user);
				if(trim($userArray[0]) == $username || trim($userArray[1]) == $username ){
					$editUser = $userArray;
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
				if(trim($userArray[0]) == $username || trim($userArray[1]) == $username){
					$editUser = $userArray;
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
	<title>Add User</title>
</head>
<body>

	<a href="Search.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>
	<br><br>

	<table border="1">
		<tr>
			<td>No</td>
			<td>Name</td>
			<td>Password</td>
			<td>Gender</td>
			<td>Date of Birth</td>
			<td>Email</td>
		</tr>
		<?php 
			if($userArray[0] != null)
				{
		?>
		<tr>
			<td><?=$userArray[0]?></td>
			<td><?=$userArray[1]?></td>
			<td><?=$userArray[2]?></td>
			<td><?=$userArray[4]?></td>
			<td><?=$userArray[5]?></td>
			<td><?=$userArray[3]?></td>
			<td>
			</td>
		</tr>
		<?php
				}	
		?>
		
	</table>
</body>
</html>