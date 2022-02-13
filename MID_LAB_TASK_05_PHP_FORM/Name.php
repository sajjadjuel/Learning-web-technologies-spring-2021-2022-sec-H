<?php 

	

	$uerror = "";
	$name = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['myname'] == null){
			$uerror  = "Invalid name...";
		}else{
			$name = $_REQUEST['myname'];
		}
	}	
?>


<html>
<head>
	<title></title>
</head>
<body>


	<form method="POST" action="">

					Name <br>
					<tr><td>
					<input type="text" name="myname" value="<?=$name?>"/> <br></td>
					<td><input type="submit" name="submit" value="Submit"></td>
					 <td align="center"> <?= $uerror ?> </td></tr>
	</form>
</body>