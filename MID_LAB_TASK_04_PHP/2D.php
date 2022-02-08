<?php

	$Arr = [
				[1, 2, 3, 'A'],
				[1, 2, 'B', 'C'],
				[1, 'D', 'E', 'F']
		   ];
	echo "Shape-1<br>";
	for ($i=0; $i <= 2; $i++)
	 { 
		for($j = 0;$j < 3-$i; $j++)
		{
			$val = $Arr[$i][$j]." ";
			echo "$val ";
		}
		echo "<br>";
	}
	echo "<br>Shape-2<br>";
	for ($i=0; $i <=2; $i++) 
	{ 
		for($j =3-$i; $j <4; $j++)
		{
			$val = $Arr[$i][$j]." ";
			echo "$val ";
		}
		echo "<br>";
	}
?>