<?php 

	$deg = "";
	if(isset($_REQUEST['submit'])){
		
		if(empty($_REQUEST['degree'])){
			echo "Invalid Selection";
		}else{
			$deg = $_REQUEST['degree'];
			foreach ($deg as $dg) {
				echo $dg."  ";}
		}
	}
?>