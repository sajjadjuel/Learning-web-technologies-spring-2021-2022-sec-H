<?php 

	//require('db.php');
	//$con = mysqli_connect('localhost', 'root', '', 'webtech');

	function flogin($username, $password){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');

		$sql = "select * from freelancer where name='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function fsignup($username, $password, $email, $gender, $dob){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "insert into freelancer values('', '{$name}', '{$password}', '{$email}', {'$gender'},{'$dob'})";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	

?>
