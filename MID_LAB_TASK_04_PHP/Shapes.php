<?php
	echo "Shape-1<br>";
	for($i=1; $i <=3 ; $i++)
	{
		for($j=$i; $j <=2*$i-1 ; $j++)
		{
			echo "* ";
		}
		echo "<br>";
	}
	echo "<br><br><br>";

	echo "Shape-2 <br>";
	
	for($i=0; $i <3 ; $i++)
	{
		for($j=1; $j <=3-$i ; $j++)
		{
			echo "$j ";
		}
		echo "<br>";
	}

	echo "<br><br><br>";

	echo "Shape-2 <br>";
	$Let='A';
	for($i=1; $i <=3 ; $i++)
	{
		for($j=$i; $j <=2*$i-1 ; $j++)
		{
			echo $Let++." ";
		}
		echo "<br>";
	}
?>