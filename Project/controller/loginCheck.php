<?php 
	if(isset($_REQUEST['submit']))
	{
		$username =  $_REQUEST['username'];
		$file = fopen('../model/user.txt', 'r');
		$Ffile = fopen('../model/user_F.txt', 'r');
		$afile = fopen('../model/admin.txt', 'r');
		if ($_REQUEST['usr']=='Admin')
		{
			while(!feof($afile))
			{
				$user = fgets($afile);
				$userArray = explode('|', $user);

				if ($username!=null)
				{
					if(trim($userArray[1]) == $username){
					$editUser = $userArray;
					break;
				}
				}
		}
		}
		elseif ($_REQUEST['usr']=='Freelancher') 
		{
		while(!feof($Ffile))
			{
				$user = fgets($Ffile);
				$userArray = explode('|', $user);

				if ($username!=null)
				{
					if(trim($userArray[1]) == $username){
					$editUser = $userArray;
					break;
				}
				}
			}	
		}
		elseif ($_REQUEST['usr']=='Client')
		{
			while(!feof($file))
			{
				$user = fgets($file);
				$userArray = explode('|', $user);
				if($username!=null)
				{
					if(trim($userArray[1]) == $username){
					$editUser = $userArray;

					break;
					}
				}
			}	

		}

		if ($_REQUEST['usr']=='Admin')
		{
			if($_REQUEST['username']!= null && $_REQUEST['password']!= null){

			if(trim($_REQUEST['username']) == $editUser[1] && trim($_REQUEST['password']) == $editUser[2]){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				$rem = ['name'=>$name,'password'=>$password];
					$_SESSION['rem'] = $rem;
				header('location: ../views/Dashboard.php?name='.$editUser[1]);
			}else{
				echo "invalid username/password";
			}

		}else{
			echo "null submission..";
		}
		}

		elseif($_REQUEST['usr']=='Client')
		{
			if($_REQUEST['username']!= null && $_REQUEST['password']!= null){

			if(trim($_REQUEST['username']) == $editUser[1] && trim($_REQUEST['password']) == $editUser[2]){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				$rem = ['name'=>$name,'password'=>$password];
					$_SESSION['rem'] = $rem;
				header('location: ../views/LoginView.php?name='.$editUser[1]);
			}else{
				echo "invalid username/password";
			}

		}else{
			echo "null submission..";
		}
		}

		elseif($_REQUEST['usr']=='Freelancher')
		{
			if($_REQUEST['username']!= null && $_REQUEST['password']!= null){

			if(trim($_REQUEST['username']) == $editUser[1] && trim($_REQUEST['password']) == $editUser[2]){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				echo "Freelancher Login Successful";
			}else{
				echo "invalid username/password";
			}

		}else{
			echo "null submission..";
		}
		}

		
	}	
?>