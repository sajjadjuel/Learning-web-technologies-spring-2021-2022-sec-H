<?php 
	session_start();
	require('../model/AdminModel.php');
	if(isset($_REQUEST['submit']))
	{
		$con=mysqli_connect('localhost','root','','webtech');
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];
		$src = $_FILES['myfile']['tmp_name'];
		$des = "../uploads/".$_FILES['myfile']['name'];
		move_uploaded_file($src, $des);

		if($username != null && $password != null && $email != null){

			Add_C($username, $password, $email, $gender, $dob);
			
			header('location: ../views/Dashboard.php');

		}else{
			echo "null submission..";
		}
	}	
?>