<?php

//parameter is function input

function getGrade($marks){ 

	if ($marks>=70 && $marks<=100) 
	{
	$grade = 'A+';
	}

	else if ($marks>=30 && $marks<=69)
	{
		$grade = 'A';
	}

	else $grade = 'F';

		return $grade; //function output or return value
}

echo "Grade is ".getGrade(85); //

