 <?php 
	include_once('Condition.php');
			/*if(isset($_REQUEST['search']))
				{
					$file = fopen('../model/EmpInfo.txt', 'r');
											
							while (!feof($file)) {
							$user = fgets($file);
							if($user == null){
							break;
							}	
					$userArray = explode("|", $user);
				}
			?>*/
?>
<html>
<head>
	<title>Online Market</title>
</head>
<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
	<form method="POST" action=" ">
		<center>
			<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Employee Details</b></legend>
						

						<table border="5" align="center" style="border-color: mediumseagreen; height:40%;width:80%;">
		
							<tr>
								<td colspan="4" align="center">
									<b>Search:</b><input type="text" name="search"  value="">
									<input type="button" name="search" value="Search">
								</td>
										
								<td colspan="2" align="center">
									<b> Category: </b>
										<select name="category">
											<option value="">Logo Designer</option>
											<option value="">Web Developer</option>
											<option value="">Web Designer</option>
											<option value="">Content Creater</option>
										</select> 
								</td>
							</tr>
							<tr>
								<th>ID</th>
								<th>Username</th>
								<th>Gender</th>
								<th>Email</th>							
								<th>ACTION</th>
							</tr>

											<?php 
												$file = fopen('../model/user.txt', 'r');
												
												while (!feof($file)) {
													$user = fgets($file);
													if($user == null){
														break;
													}
													
													$userArray = explode("|", $user);
													
											?>

											<tr>
												<td><?=$userArray[0]?></td>
												<td><?=$userArray[1]?></td>
												<td><?=$userArray[4]?></td>
												<td><?=$userArray[3]?></td>
												<td>
													<a href="CEdit.php?id=<?=$userArray[0]?>"> EDIT </a> | 
													<a href="Delete.php?id=<?=$userArray[0]?>"> DELETE </a>  
												</td>
											</tr>

											<?php
												}
											?>
						</table>
			</fieldset>
		</center>
				
	</form>
</body>