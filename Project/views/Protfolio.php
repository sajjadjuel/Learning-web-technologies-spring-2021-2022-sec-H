<?php 
	session_start();
		$name=$_REQUEST["name"];
	if(isset($_REQUEST['submit'])){
		
		$src = $_FILES['file']['tmp_name'];
		$des = "../profolio/".$_FILES['file']['name'];

		move_uploaded_file($src, $des);
	
		header('location: Fdashboard.php?name='.$name);}

?>


<html>
	<head>
		<title>Protfolio</title>
	</head>
	<body>
		
		<form method="POST" action="" enctype="multipart/form-data">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:25;margin: 10%; text-align:left; " >PROTFOLIO</legend>
					<table  align="center" width="100%" >

						<tr height="80px" style="background:lightcyan;">
							<td style="color:green; font-size:25;margin: 10%; text-align:left; font-family:Lucida Handwriting; ">Marketplace </td>
							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:right; "><p>Logged in as <a href="viewProfile.php?name=<?=$name?>"><?=$name?></a>| </td>

								<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:left; "><a href="../controller/logout.php">Logout</a> </td>

						</tr>
						<tr height ="250px">
							<td style="background:Thistle;"><ul>
								<li><a href="Fdashboard.php?name=<?=$name?>">Dashboard</a></li>
								<li><a href="viewProfile.php?name=<?=$name?>">View Profile </a></li>
								<li><a href="editProfile.php?name=<?=$name?>">Edit Profile</a></li>
								<li><a href="#">Add Protfolio</a></li>
								
								<li><a href="jobApply.php?name=<?=$name?>">Job Apply</a></li>
								<li><a href="">Communicate With Client</li></a>
								<li><a href="account.php?name=<?=$_REQUEST['name']?>">Account</a></li>
								<li><a href="">Withdraw Account</a></li> </p></td>
								<td colspan="2"style="background: lavender;font-size: 15;color: green;"><p>Add your Protfolio:<input type="file" name="file"><p colspan="2"><hr style="height:1px;background-color:mediumseagreen;"><input type="submit" name="submit"></p></p></td>
	
				        </td>	
					</tr>
						<tr>
							<td colspan="3" align="center" height="50px" style="background:mediumseagreen;">
								<h4 style="color: white;font-size:15;width:35%;height:10%;text-align: center;" >Copyright&copy2017<h4>
							</td>
						</tr>
				</fieldset>
			</center>
		</form>
	</body>
</html>