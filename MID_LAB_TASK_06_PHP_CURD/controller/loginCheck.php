<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username =  $_REQUEST['username'];
		$file = fopen('../model/user.txt', 'r');
		while(!feof($file)){
			$user = fgets($file);
			$userArray = explode('|', $user);

			if(trim($userArray[0]) == $username){
				$editUser = $userArray;
				break;
			}
	}
		//$username = $editUser[1];
		//$password = $editUser[2];

		if($_REQUEST['username']!= null && $_REQUEST['password']!= null){
		
			/*if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}*/
/*
			$file = fopen('../model/user.txt', 'r');
			$user = fread($file, filesize('../model/user.txt'));
			//fgets()

			fclose($file);
			$abc = explode('|', $user);
			//print_r($abc);*/
				
			if(trim($_REQUEST['username']) == $editUser[0] && trim($_REQUEST['password']) == $editUser[1]){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				
				header('location: ../views/home.php');
			}else{
				echo "invalid username/password";
			}

		}else{
			echo "null submission..";
		}
	}	
?>