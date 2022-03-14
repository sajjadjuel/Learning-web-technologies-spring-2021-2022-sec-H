<?php 
	include('header.php');
	
	if($_REQUEST['id']!=null){
		$id = $_REQUEST['id'];

		if($_REQUEST['id']!=null){
			
			$file = fopen('../model/user_F.txt', 'r');
			$fuser = "";

			while(!feof($file)){
				$upUser = fgets($file);
				$user = explode('|', $upUser);
				
				if($user[0] != $id){
					$fuser .= $upUser;
				}
				
				
			}

			$file = fopen('../model/user_F.txt', 'w');
			fwrite($file, $fuser);
			header('location: ../views/F_List.php');

		}else{
			echo "null submission";
		}
	}
?>