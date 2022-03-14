<?php 
	session_start();
	
	if(isset($_REQUEST['remove']))
	{
		
		$username = $_REQUEST['username'];
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		$category = $_REQUEST['category'];
		$id = $_REQUEST['id'];

		if($username != null && $gender != null && $email != null)
		{
			
			$file = fopen('../model/EmpInfo.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$username."|".$password."|".$email."|".$category."\r\n";
				}
				$updatedContent = $line;
			
			}

			$file = fopen('../model/EmpInfo.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/Userlist_E.php');

		}
		else
		{
			echo "null submission";
		}
	}
?>