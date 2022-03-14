<?php 
	include('header.php');
	
	if($_REQUEST['id']!=null){
		$id = $_REQUEST['id'];

		if($_REQUEST['id']!=null){
			
			$file = fopen('../model/user.txt', 'r');
			$fuser = "";

			while(!feof($file)){
				$upUser = fgets($file);
				$user = explode('|', $upUser);
				
				if($user[0] != $id){
					//$upUser = $id1."|".$username1."|".$password1."|".$email1."\r\n";
					$fuser .= $upUser;
				}
				
				
			}

			$file = fopen('../model/user.txt', 'w');
			fwrite($file, $fuser);
			header('location: ../views/clientlist.php');

		}else{
			echo "null submission";
		}
	}
?>