<?php 

	

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['dd']== null || $_REQUEST['dd']<1){
			echo "Invalid dob";
		}
		elseif ($_REQUEST['mm']== null || $_REQUEST['mm']<1 || $_REQUEST['mm']>12 || $_REQUEST['yyyy']== null) {
			echo "Invalid dob";
		}

		
		else{
			echo $_REQUEST['dd']."-";
			echo $_REQUEST['mm']."-";
			echo $_REQUEST['yyyy'];
		}
	}
?>