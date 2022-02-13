<?php 

	
	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['gender'])){
			echo "Invalid Selection";
		}else{
			echo $_REQUEST['gender'];
		}
	}
?>