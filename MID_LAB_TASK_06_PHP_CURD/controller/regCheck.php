<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
			$file = fopen('../model/user.txt', 'r');
			while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);
				if(trim($userArray[0]) != null)
					{
						$id=$userArray[0];
						$id=(int)$id+1;
					}

			}

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $email != null){

			$user = $id."|".$username."|".$password."|".$email."\r\n";
			$file = fopen("../model/user.txt", 'a');
			fwrite($file, $user);
			fclose($file);
			
			header('location: ../views/login.php');

		}else{
			echo "null submission..";
		}
	}	
?>