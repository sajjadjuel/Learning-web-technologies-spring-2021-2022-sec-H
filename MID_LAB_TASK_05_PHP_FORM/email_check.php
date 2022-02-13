<?php 

	

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['email'] == null){
			echo "Invalid Mail";
		}else{
			echo $_REQUEST['email'];
		}
	}
?>