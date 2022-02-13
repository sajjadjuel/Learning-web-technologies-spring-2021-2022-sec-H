<?php 

	

	$merror = "";
	$mail = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['email'] == null){
			$merror  = "Invalid email";
		}else{
			$mail = $_REQUEST['email'];
		}
	}	
?>

<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="#">

					Email <br>
					<tr><td>
						<input type="email" name="email" value="<?=$mail?>"><br></td>
					
						<td><input type="submit" name="submit" value="Submit"></td>
						<td align="center"> <?= $merror ?> </td></tr>

					</td></tr>
	</form>
</body>