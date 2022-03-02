<?php 
	include('header.php');

	if(isset($_REQUEST['submit'])){
		$username =  $_REQUEST['username'];
		$file = fopen('../model/user.txt', 'r');
		while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);

				if(trim($userArray[1]) == $username){
					$editUser = $userArray;
					break;
				}
		}
		if($_REQUEST['username']!= null && $_REQUEST['password']!= null){
		
				
			if(trim($_REQUEST['username']) == $editUser[1] && trim($_REQUEST['password']) == $editUser[2]){
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