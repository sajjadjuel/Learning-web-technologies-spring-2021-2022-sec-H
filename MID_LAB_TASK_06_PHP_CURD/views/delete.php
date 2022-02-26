<?php 
	session_start();
	include('header.php');

			$file = fopen('../model/user.txt', 'r');
			while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);
				if(trim($userArray[0]) == $_REQUEST['id'])
					{
						$id="";
						$userArray[1]="";
						$userArray[2]="";
						$userArray[3]="";

							$userArray = $id.$userArray[1].$userArray[2].$userArray[3]."\r\n";
							$file = fopen("../model/user.txt", 'w');
							fwrite($file, $userArray);
							fclose($file);
							
							header('location: ../views/reg.php');


					}

			}
?>