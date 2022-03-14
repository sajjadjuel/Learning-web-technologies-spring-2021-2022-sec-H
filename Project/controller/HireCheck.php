<?php 
	session_start();

	if(isset($_REQUEST['request']))
	{
		$salary = $_REQUEST['sal'];
		$category = $_REQUEST['category'];
		$pay = $_REQUEST['method'];
		/*if($salary <= 5000)
			{
				echo "Please increase the amount";
			}
		else
		{*/

							if($salary != null)
								{

									//$user = $salary."|".$category."|".$pay;
									//$file = fopen("../model/Hireinfo.txt", 'w');
									//fwrite($file, $user);
									//fclose($file);
									
									//header('location:../views/Header.php');
									echo "Hire Request on process";

								}
								else
								{
									echo "Information Missing";
								}
		//}
		
	}	
?>