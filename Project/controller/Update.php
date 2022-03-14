<?php 
	session_start();
	
	if(isset($_REQUEST['update']))
	{
		
		$username = $_REQUEST['username'];
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		//$category = $_REQUEST['category'];
		$id = $_REQUEST['id'];
		if($username != null && $gender != null && $email != null)
		{
			
			$file = fopen('../model/EmpInfo.txt', 'r');
			$updatedContent = "";

				while(!feof($file))
				{
					$line = fgets($file);
					$userArray = explode('|', $line);
					
					if($userArray[0] == $id){
						$line = $id."|".$username."|".$gender."|".$email;//."|".$category;//."\r\n";
					}
					$updatedContent .= $line;
				
				}

			$file = fopen('../model/EmpInfo.txt', 'w');
			fwrite($file, $updatedContent);
			fclose($file);
			header('location: ../views/Userlist_E.php');

		}
		else
		{
			echo "null submission";
		}
	}
?>