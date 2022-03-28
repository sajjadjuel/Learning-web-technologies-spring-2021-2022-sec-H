<?php 

	
	function login($username, $password){
		$con = mysqli_connect('localhost', 'root', '', 'webtech');

		$sql = "select * from admin where user='{$username}' and pass='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function Add_C($username, $password, $email, $gender, $dob)
	{
		//$con = Connection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "insert into client values('', '{$username}', '{$password}', '{$email}', '{$gender}','{$dob}')";
		$data= mysqli_query($con, $sql);
	}
	function Add_F($username, $password, $email, $gender, $dob)
	{
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "insert into freelancer values('', '{$username}', '{$password}', '{$email}', '{$gender}','{$dob}')";

		if(mysqli_query($con, $sql)){
				header('location: ../views/Dashboard.php');			
			}else{
				header('location: "#"');
			}
	}

	function getClient($id){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from client where id='{$id}' or name='{$id}'";
		/*if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}*/
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
	function forgetC($email){
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from client where email='{$email}'";
		/*if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}*/
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;


	}

	function deleteClient($id){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "delete from where id ='{$id}'";
		//$sql = "delete * from client where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getClientByName($name){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from client where name='{$name}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

	}

	function updateClient($id, $username, $password, $email, $gender, $dob){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "update client SET name='{$username}',password='{$password}', email='{$email}',
		gender='{$gender}', dob='{$dob}' where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}	

	}

	function getAllClient(){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from client";
		$result = mysqli_query($con, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;

	}
	//====================\\

	function getFreelancer($id){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from freelancer where id='{$id}' or name='{$id}'";
		/*if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}*/
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;


	}
	function forgetF($email){
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from freelancer where email='{$email}'";
		/*if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}*/
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;


	}
/*
	function getFreelancerByName($name){
		//$con = getConnection();
		$sql = "select * from freelancer where name='{$name}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

	}*/
	function deleteFreelancer($id){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "delete from freelancer where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}


	}

	function updateFreelancer($id, $username, $password, $email, $gender, $dob){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "update freelancer SET name='{$username}',password='{$password}', email='{$email}',
		gender='{$gender}', dob='{$dob}' where id='{$id}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}


		

	}

	function getAllFreelancer(){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "select * from freelancer";
		$result = mysqli_query($con, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}



?>