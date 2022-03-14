<?php  

	session_start();

	if(isset($_REQUEST['upload'])){

		//print_r($_FILES['myfile']);

		$src = $_FILES['myfile']['tmp_name'];
		$des = "../model/".$_FILES['myfile']['name'];

		if(move_uploaded_file($src, $des)){
			echo "success";
		}else{
			echo "error";
		}
	}

			
?>