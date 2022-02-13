<?php 
	
	if(isset($_REQUEST['submit'])){
		$mail = $_REQUEST['email'];
		if($mail != ""){
			echo $mail;
		}else{
			echo "Invalid Mail";
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
					<input type="email" name="email" value=""><br>
					<input type="submit" name="submit" value="Submit">
	</form>
</body>