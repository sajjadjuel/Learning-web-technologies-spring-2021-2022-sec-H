<?php 
session_start();
if(isset($_REQUEST['submit'])){
	$name=$_REQUEST['name'];
	$account=$_REQUEST['account'];
	$withdrawAmmount=$_REQUEST['number'];
	if($account !=null && $withdrawAmmount!= null){
		$acc=$account-$withdrawAmmount;
		echo $acc;


		}
		header('location: ../views/Fdashboard.php?name='.$name);

	}
	
?> 