<?php
	
	$Elem = ['Rakib', 'Sakib', 'Ramim', '500','3500'];

		function Find($val,$Elem)
		{
			$p=0;
			foreach ($Elem as $e)
			{
				if($e==$val)
					{
						$p++;

					}	
					
			}
			if($p!=0)
					{
						echo "$val Found <br> ";

					}	
					else
					{
						echo "$val not Found <br>";
					}
		}
		Find('Rakib',$Elem);
		Find('500',$Elem);
		Find('4500',$Elem);
		
		
?>