<?php 
	session_start();
		$name=$_REQUEST["name"];
	if(isset($_REQUEST['submit'])){
		
		$src = $_FILES['file']['tmp_name'];
		$des = "../jobApply/".$_FILES['file']['name'];

		move_uploaded_file($src, $des);
	
		header('location: Fdashboard.php?name='.$name);}

?>

<html>
	<head>
		<title>jobApply</title>
	</head>
	<body>
		
		<form method="POST" action=""enctype="multipart/form-data">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:25;margin: 10%; text-align:left; " ><b>JOBAPPLY</b></legend>
				<table  align="center" width="100%" >

						<tr height="80px" style="background:lightcyan;">
							<td style="color:green; font-size:25;margin: 10%; text-align:left; font-family:Lucida Handwriting; ">Marketplace </td>
							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:right; "><p>Logged in as <a href="viewProfile.php?name=<?=$name?>"><?=$name?></a>| </td>

							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:left; "><a href="../controller/logout.php">Logout</a> </td>

						</tr><tr height="10px"><td colspan="3"></td></tr>
				
					<tr>
						<td colspan="3" style="color:green;font-size:20;"><b>Active job : Logo design</b></td>
					</tr>
					
						<tr>
							<td style="color:black;font-size:20;">salary: 1312<br>please submit your cv/protfolio<input type="file" name="file"value="">

							</td>
							<td colspan="2" style="color:black;"></td>

						</tr>
						<tr>
							<td colspan="3"><hr style="height:1px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td colspan="3"><input type="submit" name="submit"></td>
						</tr>

						</tr><tr height="10px"><td colspan="2"></td></tr>


						<tr>
							<td colspan="3" align="center" height="40px" style="background:mediumseagreen;">
								<a href="../views/Fdashboard.php" style="color: white;font-size:25;width:40%;height:80%;">Dashboard</a>
							</td>
						</tr>

					</table>

				</fieldset>
			</center>
		</form>
	</body>
</html>

