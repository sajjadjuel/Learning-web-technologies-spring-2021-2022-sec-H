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
<pre>

		<table border="1" width="40%" align="center">
			<tr height="80px">
				<td align="center"> <h1>MARKETPLACE</h1></td>
				<td align="right" colspan="2"> Logged in as 
					<a href="Dashboard.php"><?=$username?>|</a>
					<a href="../controller/logout.php">Logout</a>
				</td>
			</tr>
			<tr>
				<td> 
					<ul>
						<li><a href="Dashboard.php">Dashboard</a></li>
						<li><a href="Add_client.php">Add Client</a></li>
						<li><a href="clientlist.php">Client List</a></li>
						<li><a href="Add_Freelancher.php">Add Freelancer</a></li>
						<li><a href="F_List.php">Freelancer List</a></li>
						<li><a href="../controller/logout.php">Logout</a></li>
					</ul>
					<td>

					<form action="Find.php">
						<select name="src"> Search =>
							<option value="Client">Client</option>
							<option value="Freelancher">Freelancer</option>
							
						</select><br>
						<hr>
					  <label for="search">Search:</label>
					  <input type="text" name="search" value="">
					  <input type="submit"  name="submit" value="Submit">
					</form>

					</td>
			</tr>								
			<tr height="50px">
				<td colspan="3" align="center"> <h3>copyright @ Group 11[H]</h3></td>
			</tr>
		</table></pre>
</body>
</html>

