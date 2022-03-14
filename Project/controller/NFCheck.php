<?php 

	if(isset($_REQUEST['submit'])){

		//print_r($_FILES['myfile']);

		$src = $_FILES['details']['tmp_name'];
		$des = "../model/".$_FILES['details']['name'];

		if(move_uploaded_file($src, $des)){
			echo "success";
		}else{
			echo "error";
		}
	}


?>