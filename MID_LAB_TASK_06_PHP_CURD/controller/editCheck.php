<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
			$file = fopen('../model/user.txt', 'r');
			while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);
				if(trim($userArray[0]) == $_REQUEST['id'])
					{
						$id=$userArray[0];
						$userArray[1]=$_REQUEST['username'];
						$userArray[2]=$_REQUEST['password'];
						$userArray[3]=$_REQUEST['email'];

						if($userArray[1] != null && $userArray[2] != null && $userArray[3] != null){

							$userArray = $id."|".$userArray[1]."|".$userArray[2]."|".$userArray[3]."\r\n";
							$file = fopen("../model/user.txt", 'w');
							fwrite($file, $userArray);
							fclose($file);
							
							header('location: ../views/login.php');

						}else{
							echo "null submission..";
						}


					}

			}

		
	}	
?>