<?php 

	

	$derror = "";
	$deg = "";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['degree'])){
			echo "  Invalid Selection";
		}
		else{
			$deg = $_REQUEST['degree'];}


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
			
					    <input type="checkbox" name="degree[]" value="SSC"<?php if (isset($_REQUEST['degree']) && in_array("SSC", $_REQUEST['degree'])) echo 'checked="checked"';?>/>SSC  
						<input type="checkbox" name="degree[]" value="HSC"<?php if (isset($_REQUEST['degree']) && in_array("HSC", $_REQUEST['degree'])) echo 'checked="checked"';?>/> HSC 
						<input type="checkbox" name="degree[]" value="BSc"<?php if (isset($_REQUEST['degree']) && in_array("BSc", $_REQUEST['degree'])) echo 'checked="checked"';?>/> BSc 
				
		</fieldset><br>
		<input type="submit" name="submit" value="Submit">

	</form>
</body>