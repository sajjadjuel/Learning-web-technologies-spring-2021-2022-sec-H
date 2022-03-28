<?php
include('header.php');
require('../model/AdminModel.php');
	if(isset($_COOKIE['status'])){
		if(isset($_REQUEST['submit']))
	{
		$id =  $_REQUEST['search'];

		if ($_REQUEST['src']=='Freelancher') 
		{
			$userArray=getFreelancer($id);
		
		}
		elseif ($_REQUEST['src']=='Client')
		{
			$userArray=getClient($id);

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
			if($userArray['id']!= null)
			{
		?>
		<tr>
			<td><?=$userArray['id']?></td>
			<td><?=$userArray['name']?></td>
			<td><?=$userArray['password']?></td>
			<td><?=$userArray['gender']?></td>
			<td><?=$userArray['dob']?></td>
			<td><?=$userArray['email']?></td>
			<td>
			</td>
		</tr>
		<?php
				}
				else
				{
					echo "Not Found";
				}	
		?>
		
	</table>
</body>
</html>