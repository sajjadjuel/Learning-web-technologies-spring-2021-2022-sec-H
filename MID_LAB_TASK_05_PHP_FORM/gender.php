<?php 

	

	$gerror = "";
	$gen = "";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['gender'])){
			$gerror  = "  Invalid Selection";
		}
		else{
			$gen = $_REQUEST['gender'];
		}
	}	
?>




<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend >Gender</legend>
			<tr>
				<td>
						<input type="radio" name="gender" value="Male"<?php if (isset($_POST['gender']) && $_POST['gender'] == "Male") echo "checked";?>/> Male
						<input type="radio" name="gender" value="Female"<?php if (isset($_POST['gender']) && $_POST['gender'] == "Female") echo "checked";?>/> Female
						<input type="radio" name="gender" value="Other"<?php if (isset($_POST['gender']) && $_POST['gender'] == "Other") echo "checked";?>/> Other
				
		</fieldset><br>
				</td>
				
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
				<td align="center"> <?= $gerror ?> </td></tr>
			
					    
		
		
		
	</form>
</body>