<?php
	
	function area($length, $width){
		echo "Area: ".$length*$width ."<br>";
	}	
	function perimeter($length, $width){
		echo "Perimeter: ". 2*($length+$width)."<br>";
	}	
	area(4,7);
	perimeter(4,7);
?>