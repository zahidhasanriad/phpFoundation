<?php

//$marks=73;
//$marks=63;
$marks=43;

if($marks >= 80 && $marks <= 100)
	$grade="A+";
else if($marks >= 70 && $marks <= 79)
	$grade="A";

else if($marks >= 60 && $marks <= 69)
	$grade="A-";

else if($marks >= 50 && $marks <= 59)
	$grade="B";

else if($marks >= 40 && $marks <= 49)
	$grade="C";

else if($marks >= 33 && $marks <= 39)
	$grade="D";

else if($marks >= 0 && $marks <= 32)
	$grade="F";

echo $grade;