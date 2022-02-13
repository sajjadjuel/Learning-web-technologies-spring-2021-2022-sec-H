<?php 
	
	if(isset($_REQUEST['submit'])){
		$dob = $_REQUEST['dd']."-".$_REQUEST['mm']."-".$_REQUEST['yyyy'];
		if($_REQUEST['dd']!= "" && $_REQUEST['mm']!= "" && $_REQUEST['yyyy']!= "" ){
			echo $dob;
		}else{
			echo "Invalid DOB";
		}
	}

?>


<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend ><b>Date of Birth</b></legend>
			<table>
				<tr>
					<td> dd / </td>
					<td> mm / </td>
					<td> yyyy</td>
					
				</tr>
				<tr>
					<td> <input type="number" name="dd" value=""> / </td>
					<td> <input type="number" name="mm" value=""> / </td>
					<td> <input type="number" name="yyyy" value=""> </td>

				</tr>
				<tr><td colspan="3"><hr></td></tr>
				<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
				
			</table>
		</fieldset>
	</form>
</body>
