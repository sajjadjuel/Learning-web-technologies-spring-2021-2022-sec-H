<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$id =  $_GET['id'];
	$file = fopen('../model/user.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[0]) == $id){
			$editUser = $userArray;
			break;
		}
	}
		if($username != null && $password != null && $email != null){
			
			//$user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
			//$_SESSION['user'] = $user;

			$user = $username."|".$password."|".$email."\r\n";
			$file = fopen("../model/user.txt", 'a');
			fwrite($file, $user);
			fclose($file);
			
			header('location: ../views/login.php');

		}else{
			echo "null submission..";
		}
	}	
?>