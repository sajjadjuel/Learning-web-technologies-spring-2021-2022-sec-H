<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}
					
			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['status'] = 'true';
				header('location: Dashboard.php');
			}else{
				echo "invalid username or password";
			}

		}else{
			echo "null submission..";
		}
	}	
?>