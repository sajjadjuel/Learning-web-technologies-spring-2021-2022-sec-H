<?php
include('header.php');
	if(isset($_COOKIE['status'])){
		$file = fopen('../model/user_F.txt', 'r');
		while(!feof($file)){
			$user = fgets($file);
			$userArray = explode('|', $user);
	}
}
?>

<html>
<head>
	<title>Freelancher List</title>
</head>
<body>

	<a href="Dashboard.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>
	<br><br>

	<table border="1">
		<legend><b>Freelancer List :</b></legend>
		<tr>
			<td>No</td>
			<td>Name</td>
			<td>Password</td>
			<td>Gender</td>
			<td>Date of Birth</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php 
				$file = fopen('../model/user_F.txt', 'r');
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$userArray = explode("|", $user);
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
				<a href="edit_F.php?id=<?=$userArray[0]?>">Edit</a> |
				<a href="../controller/delete_F.php?id=<?=$userArray[0]?>">Delete</a>
			</td>
		</tr>
		<?php
				}	
			}
		?>
		
	</table>
</body>
</html>