<?php 
	session_start();
	require('../model/clientModel.php');
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];

		if($username!=null && $password!=null && $email!=null ){
			$status = csignup($username, $password, $email, $gender, $dob);
			if($status){
				header('location: ../views/login.php');			
			}else{
				header('location: ../views/reg.php');
			}

		}else{
			echo "null submission..";
		}
	}	
?>