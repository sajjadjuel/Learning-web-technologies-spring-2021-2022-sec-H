<?php 
	include('header.php');
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];

		if($username != null && $password != null && $email != null){
			
			$file = fopen('../model/user.txt', 'r');
			$fuser = "";

			while(!feof($file)){
				$upUser = fgets($file);
				$user = explode('|', $upUser);
				
				if($user[0] == $id){
					$upUser = $id."|".$username."|".$password."|".$email."|".$gender."|".$dob."\r\n";
				}
				$fuser .= $upUser;
				
			}

			$file = fopen('../model/user.txt', 'w');
			fwrite($file, $fuser);
			header('location: ../views/clientlist.php');

		}else{
			echo "null submission";
		}
	}
?>