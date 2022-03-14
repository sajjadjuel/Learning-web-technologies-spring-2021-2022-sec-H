<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$gender = $_REQUEST['gender'];
		$DOB = $_REQUEST['dob'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];
		$Cpassword = $_REQUEST['Cpass'];
				/*else if($password=="@[A-Z]@" || $password=="@[a-z]@" || $password=="@[0-9]@")
				{
					echo "Weak Password";
				}
				else if($password=="@[A-Z]@" && $password=="@[a-z]@" && $password=="@[0-9]@")
				{
					echo "Strong Password";
				}*/
		if($password <= 3)
			{
				echo "Password required length greater than 3";
			}
		else8 if($password!=$Cpassword)
		{
			echo "Password Confirm Failed";
		}
		else
		{

							if($username != null && $gender != null && $DOB != null && $email != null && $password != null && $Cpassword != null)
								{

									$user = $username."|".$gender."|".$DOB."|".$email."|".$password."\r\n";
									//$file = fopen("../model/info.txt", 'a');
									$file = fopen("../model/info.txt", 'w');
									fwrite($file, $user);
									fclose($file);
									
									header('location:../views/Header.php');

								}
								else
								{
									echo "Information Missing";
								}
		}
		
	}	
?>