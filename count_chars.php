<?php
$data = "A QUICK BROWN FOX JUMP OVER A LAZY DOG";

	//count the instances of character
	foreach (count_chars($data, 1) as $i => $val) 
	{
	echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.<br />";
	}
