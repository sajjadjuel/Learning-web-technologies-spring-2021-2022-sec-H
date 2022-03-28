<?php 
	session_start();
	require('../model/AdminModel.php');
	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];
		if($username != null && $password != null && $email != null){
			Add_F($username, $password, $email, $gender, $dob);			
			header('location: ../views/Dashboard.php');
		}else{
			echo "null submission..";
		}
	}	
?>