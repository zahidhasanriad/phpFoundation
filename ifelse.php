<?php

$marks=73;
//$marks=63;
//$marks=43;

if($marks > 79)
	$grade="A+";
else if($marks >69 )
	$grade="A";

else if($marks > 59 )
	$grade="A-";

else if($marks > 49 )
	$grade="B";

else if($marks >39)
	$grade="C";

else if($marks >32)
	$grade="D";

else if($marks <32)
	$grade="F";

echo $grade;