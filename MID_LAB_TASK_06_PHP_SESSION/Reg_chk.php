<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$pass = $_REQUEST['cpassword'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		if($password==$pass)
		{
			if($name !=null && $email != null && $username != null && $password != null && $gender != null && $dob != null){
					
					$user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob];

					$_SESSION['user'] = $user;
					header('location: Login.php');

			}else{
				echo "null submission..";
			}
		}else{
			echo "Password MisMatch";
		}
	}

?>