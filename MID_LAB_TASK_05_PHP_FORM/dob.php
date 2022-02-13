<?php 

	

	$derror = "";
	$dob = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['dd'] == null || $_REQUEST['mm'] == null || $_REQUEST['yyyy'] == null ){
			$derror  = "Invalid email";
		}
		elseif ($_REQUEST['mm']<1 || $_REQUEST['mm']>12 || $_REQUEST['dd'] <1 || $_REQUEST['yyyy'] <1 ) {
			$derror  = "Invalid email";
		}
		else{
			
			$dd=$_REQUEST['dd'];
			$mm=$_REQUEST['mm'];
			$yyyy=$_REQUEST['yyyy'];

		}
	}	
?>
	



<html>
<head>
	<title></title>
</head>
<body>

	<form method="" action="">
		<fieldset>
			<legend ><b>Date of Birth</b></legend>
			<table>
				<tr>
					<td> dd / </td>
					<td> mm / </td>
					<td> yyyy</td>
					
				</tr>
				<tr>
					<td> <input type="number" name="dd" value="<?=$dd?>"> / </td>
					<td> <input type="number" name="mm" value="<?=$mm?>"> / </td>
					<td> <input type="number" name="yyyy" value="<?=$yyyy?>"> </td>

				</tr>
				<tr><td colspan="3"><hr></td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td>
					<td align="center"> <?= $derror ?> </td></tr>
				
			</table>
		</fieldset>
	</form>
</body>