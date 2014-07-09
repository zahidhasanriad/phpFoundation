<?php

$cars = array('toyota','sedan','bmw');
$fruits = array('a'=>'apple','b'=>'banana');

//count is use to calculate array length
for($i=0; $i<count($cars);$i++)
{

	echo $cars[$i]."<br/>";
}

//more optimized code because count function is executed once
$length = count($cars);

for($i=0; $i<count($cars);$i++)
{

	echo $cars[$i]."<br/>";
}
