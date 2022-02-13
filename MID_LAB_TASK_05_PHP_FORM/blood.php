<?php 

	

	
	$bld = "";
	$berror="";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['blood'])){
			$berror= "Invalid Choice";
		}else{
			 $bld = $_REQUEST['blood'];
			 echo $bld;
		}
	}	
?>


<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="#">
		<table>
			<tr >
				<td width="40%">
		Blood Group
			
					    <select name="blood">
					    	<option value=""></option>
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="AB+">AB+</option>
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select><br>
						<hr>
		<input type="submit" name="submit" value="Submit"></td>
		<td align="center"> <?= $berror?> </td></tr>
</table>
	</form>
</body>