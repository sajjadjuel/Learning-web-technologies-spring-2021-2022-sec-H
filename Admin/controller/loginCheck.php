<?php 
	if(isset($_REQUEST['submit']))
	{
		require('../model/AdminModel.php');
		//require('../model/db.php');
		require('../model/clientModel.php');
		require('../model/freelancerModel.php');
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if ($_REQUEST['usr']=='Admin')
		{
		 if($username != null && $password != null){

			$status = login($username, $password);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../views/Dashboard.php');
				}else{
					header('location: ../views/login.php');
				}

			}else{
				echo "null submission";
			}

		}
		elseif ($_REQUEST['usr']=='Freelancher') 
		{
		 if($username != null && $password != null){

			$status = flogin($username, $password);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					//header('location: ../views/Dashboard.php');
					echo "Freelancher Login Successful";
				}else{
					header('location: ../views/login.php');
				}

			}else{
				echo "null submission";
			}
		}
		elseif ($_REQUEST['usr']=='Client')
		{
		 if($username != null && $password != null){

			$status = clogin($username, $password);

				if($status){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					//header('location: ../views/Dashboard.php');
					echo "Client Login Successful";
				}else{
					header('location: ../views/login.php');
				}

			}else{
				echo "null submission";
			}

		}

	}	
?>