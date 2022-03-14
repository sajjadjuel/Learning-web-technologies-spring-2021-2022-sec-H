<?php 
	include_once('Condition.php');
?>
<html>
	<head>
		<title>Online Marketplace</title>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<table align="left">
			<tr>
				<td>
					<img src="../model/settings.png" style="height:150px;width:150px;">
				</td>
				<td>
					<a href="../views/Profile.php"><h1 style="color:mediumseagreen;">Profile Setting </h1></a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="../model/Feed.png" style="height:150px;width:150px;">
				</td>
				<td>
					<a href="../views/NF.php"><h1 style="color:mediumseagreen;">NewsFeed</h1></a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="../model/Browse.png" style="height:150px;width:150px;">
				</td>
				<td>
					<a href="../views/Userlist_E.php"><h1 style="color:mediumseagreen;">Employees Info</h1></a>
				</td>
			</tr>
			<tr>
				<td>
					<img src="../model/search.png" style="height:150px;width:150px;">
				</td>
				<td>
					<a href="../views/BrowseEmployee.php"><h1 style="color:mediumseagreen;">View Freelancers</h1></a>
				</td>
			</tr>	
		</table>	
	</body>
</html>