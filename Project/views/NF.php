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
		<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
		<form method="POST" action="../controller/NFCheck.php" enctype="multipart/form-data">
		<table align="left">
			<tr>
				<td>
					<textarea name="detailspost">
						
					</textarea>
				</td>
				<td>
					<input type="file" name="details" value="">
				</td>
				<td>
					<input type="submit" name="submit" value="Post">
				</td>
			</tr>
			<tr>
				<td style="color:mediumseagreen; font-size:20; font-family:Times New Roman;margin: 20%;">NewsFeed</td>
				<td>
					
				</td>
			</tr>
		</table>	
	</body>
</html>