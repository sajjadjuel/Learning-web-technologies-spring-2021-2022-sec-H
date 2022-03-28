<?php 

	function clogin($username, $password){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');

		$sql = "select * from client where name='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function csignup($username, $password, $email, $gender, $dob){
		//$con = getConnection();
		$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "insert into client values('', '{$name}', '{$password}', '{$email}', {'$gender'},{'$dob'})";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	

?>
