<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];

		if($email != null && $password != null)
		{

			$file = fopen('../model/info.txt', 'r');
			$user = fread($file, filesize('../model/info.txt'));

			fclose($file);
			$check = explode('|', $user);

							if(trim($check[3]) == $email)
							{
								
								setcookie('status', 'true', time()+2500, '/');
								//echo "Welcome";
								header('location: ../views/LoginView.php');
								
							}
							else
							{
								echo "Invalid Email";
							}

		}
		else
		{
			echo "Information Missing";
		}
	}	
?>