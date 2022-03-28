<?php 
	include('../views/header.php');
	require('../model/AdminModel.php');
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];

		if($username != null && $password != null && $email != null){
			updateClient($id, $username, $password, $email, $gender, $dob);
			header('location: ../views/clientlist.php');

		}else{
			echo "null submission";
		}
	}
?>