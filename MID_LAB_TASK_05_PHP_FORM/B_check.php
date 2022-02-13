<?php 

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['blood'] == null){
			echo "Invalid Choice";
		}else{
			echo $_REQUEST['blood'];
		}
	}
?>