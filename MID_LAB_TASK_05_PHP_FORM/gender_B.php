<?php 

	if(isset($_REQUEST['submit'])){
		if(empty($_REQUEST['gender']) ){
			echo "Invalid Selection";
			
		}else{
			echo $_REQUEST['gender'];
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
			<legend >Gender</legend>
			
					    <input type="radio" name="gender" value="Male"> Male
						<input type="radio" name="gender" value="Female"> Female
						<input type="radio" name="gender" value="Other"> Other
				
		</fieldset><br>
		<input type="submit" name="submit" value="Submit">

	</form>
</body>