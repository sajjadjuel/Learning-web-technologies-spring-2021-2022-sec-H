<?php 

	

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['myname'] == null){
			echo "invalid Name...";
		}else{
			echo $_REQUEST['myname'];
		}
	}
?>