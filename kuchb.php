<?php 
	// Declaring an array 
	$arr = array(1, 2, 3, 4, 5); 

    echo("Original Array : "); 

    echo "<pre>";
	print_r($arr); 
    echo "</pre>";

	// Declaring an array to store reverse 
	$arr_rev = array(); 
	for($i = sizeof($arr) - 1; $i >= 0; $i--) { 
		array_push($arr_rev,$arr[$i]); 
	} 

	echo("Modified Array : "); 
    echo "<pre>";
	print_r($arr_rev); 
?>

