<?php 

	

	$derror = "";
	$deg = "";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['degree'])){
			echo "  Invalid Selection";
		}
		else{
			$deg = $_REQUEST['degree'];
			foreach ($deg as $dg) {
				echo $dg."  ";}

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
			<legend >Degree</legend>
			
					    <input type="checkbox" name="degree[]" value="SSC ">SSC  
						<input type="checkbox" name="degree[]" value="HSC"> HSC 
						<input type="checkbox" name="degree[]" value="BSc"> BSc 
				
		</fieldset><br>
		<input type="submit" name="submit" value="Submit">

	</form>
</body>