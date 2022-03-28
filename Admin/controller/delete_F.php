<?php 
	include('../views/header.php');
	require('../model/AdminModel.php');
	if($_REQUEST['id']!=null){
		$id = $_REQUEST['id'];

		if($_REQUEST['id']!=null){
			deleteFreelancer($id);
			header('location: ../views/F_List.php');
		}else{
			echo "null submission";
		}
	}
?>