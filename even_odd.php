<?php

//even and odd number detection

$start=1;
$finish=100;

	echo "Odd numbers are : ";
	for($count=$start;$count<=$finish;$count++)
	{
	if($count%2!=0) 
	echo $count.'  ';
	
	}	
	echo "<br />";
	
	echo "Even numbers are : ";
	for($count=$start;$count<=$finish;$count++)
	{
	if($count%2==0) 
	echo $count.'  ';
	
	}
	
