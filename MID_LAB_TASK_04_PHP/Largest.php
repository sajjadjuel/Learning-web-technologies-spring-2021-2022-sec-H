<?php
	
	function Find($num1,$num2,$num3)
	{
		if($num1>$num2 && $num1>$num3)
		{
			echo "$num1 is Largest between $num1, $num2, $num3<br>";

		}
		else if($num2>$num3)
		{
			echo "$num2 is Largest between $num1, $num2, $num3 <br>";
		}
		else{
			echo "$num3 is Largest between $num1, $num2, $num3<br>";
		}

	}	
		
	Find(21,58,20);
?>