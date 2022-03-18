<?php 
	session_start();
		$name=$_REQUEST["name"];
		$account=200000000;
		$withdrawAmmount="";
	
?>

<html>
	<head>
		<title>Account</title>
	</head>
	<body>
		
		<form method="POST" action="../controller/checkAccount.php?name=<?$name?>"enctype="multipart/form-data">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:25;margin: 10%; text-align:left; " ><b>ACCOUNT</b></legend>
				
				<table  align="center" width="100%" >

						<tr height="60px">
							
							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:right; "><p>Logged in as <a href="viewProfile.php?name=<?=$name?>"><?=$name?></a>| </td>

							<td colspan="" style="color:green; font-size:15;margin: 10%; text-align:left; "><a href="../controller/logout.php">Logout</a> </td>

						</tr><tr height="10px"><td colspan="3"></td></tr>
				
					<tr>
						<td colspan="3" style="color:green;font-size:20;"><b>Current Account:<input type="account" name="account"value="<?=$account?>"></b></td>



					</tr>
					
						<tr>
							<td style="color:black;font-size:20;">Withdrow Ammount <input type="number" name="unumber" value="number"><br>Select Bank 
            <select name="Bank">
                <option value="A+">XYZ bank</option>
                <option value="A-">ABC bank</option>
                <option value="B+">PQR bank</option>
                
            </select>

							</td>
							<td ></td>

						</tr>
						<tr>
							<td colspan="3"><hr style="height:1px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td colspan="3" align="right"><input type="submit" name="submit"></td>
						</tr>

						<tr>
						<td colspan="3" style="color:green;font-size:20;"><b>New Current Account: <input type="number" name="number"value="<?php$_REQUEST['acc']?>"></b></td>
					</tr>







						</tr><tr height="10px"><td colspan="2"></td></tr>


						<tr>
							<td colspan="3" align="center" height="40px" style="background:mediumseagreen;">
								<a href="../views/Fdashboard.php?name=<?=$name?>" style="color: white;font-size:25;width:40%;height:80%;">Dashboard</a>
							</td>
						</tr>

					</table>

				</fieldset>
			</center>
		</form>
	</body>
</html>