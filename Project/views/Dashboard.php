<?php 
	include('header.php');
		$file = fopen('../model/user.txt', 'r');
		$afile = fopen('../model/admin.txt', 'r');
			while(!feof($afile))
			{
				$user = fgets($afile);
				$userArray = explode('|', $user);
				if(trim($userArray[1]) != null)
					{
						$_SESSION['status'] = 'true';
						$username=$userArray[1];
					}
				else
					{
						echo "invalid login";
					}
			}	
?>
<html>
<head>
	<title>DASHBOARD</title>
</head>
<body>
	<center>
	<fieldset style="width:60%;border-width:10px;border-color:mediumslateblue;">
	<center>
		<table border="1" width="40%" align="center">
			<tr height="90px">
		<h1  style="width:100%;background-color:mediumseagreen;text-align: right; word-spacing: 15px;"> 
			<p style="color: white">Logged in as
			<a href="Dashboard.php" style="color: white"><?=$username?>|</a>
			<a href="../controller/logout.php" style="color: white">Logout</a></p>
		</h1>
				<td align="center" colspan="3"> <h1>MARKETPLACE</h1></td>
			</tr>
			<tr>
				<td> 
					<ul>
						<li><a href="#">Dashboard</a></li>
						<li><a href="Add_client.php">Add Client</a></li>
						<li><a href="clientlist.php">Client List</a></li>
						<li><a href="Add_Freelancher.php">Add Freelancer</a></li>
						<li><a href="F_List.php">Freelancer List</a></li>
						<li><a href="Search.php">Search</a></li>
						<li><a href="../controller/logout.php">Logout</a></li>
					</ul>
					<td><h2>Welcome <?=$username?></h2> </td>
			</tr>								
			<tr height="50px">
				<td colspan="3" align="center"> copyright @ Group 11[H]</td>
			</tr>
		</table>
</body>
</html>

