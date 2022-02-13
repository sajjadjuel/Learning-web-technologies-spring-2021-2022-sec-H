<?php 

	

	
	$bld = "";
	$berror="";

	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['blood'])){
			$berror= "Invalid Choice";
		}else{
			 $bld = $_REQUEST['blood'];
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
							<option value="A+"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='A+') echo "selected='selected'" ?>/>A+</option>
							<option value="B+"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='B+') echo "selected='selected'" ?>/>B+</option>
							<option value="AB+"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='AB+') echo "selected='selected'" ?>/>AB+</option>
							<option value="A-"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='A-') echo "selected='selected'" ?>/>A-</option>
							<option value="B-"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='B-') echo "selected='selected'" ?>/>B-</option>
							<option value="AB-"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='AB-') echo "selected='selected'" ?>/>AB-</option>
							<option value="O+"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='O+') echo "selected='selected'" ?>/>O+</option>
							<option value="O-"<?php if(isset($_REQUEST['blood']) && $_REQUEST['blood']=='O-') echo "selected='selected'" ?>/>O-</option>
						</select><br>
						<hr>
		<input type="submit" name="submit" value="Submit"></td>
		<td align="center"> <?= $berror?> </td></tr>
</table>
	</form>
</body>