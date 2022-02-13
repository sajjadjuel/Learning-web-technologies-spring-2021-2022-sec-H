<?php 
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
		if($name != ""){
			echo $name;
		}else{
			echo "Invalid Name.";
		}
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="POST" action="">
					Name <br>
					<input type="text" name="myname" value="" /> <br>
					<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>