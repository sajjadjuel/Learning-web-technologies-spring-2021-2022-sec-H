<?php 
	include('../views/header.php');
	require('../model/AdminModel.php');
	if($_REQUEST['id']!=null){
		$id = $_REQUEST['id'];

		if($_REQUEST['id']!=null){
			
			deleteClient($id);
			header('location: ../views/clientlist.php');

		}else{
			echo "null submission";
		}
	}
?>