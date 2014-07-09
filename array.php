<?php

//Array 

$cars = array(); //variable is defined as an array

echo gettype($cars); //array output

echo '<br/>........................<br/>' ;

$cars = array('toyota','sedan','bmw'); //variable is defined as an array

echo "pre";
print_r($cars);
echo "</pre>";
echo '<br/>........................<br/>' ;

$cars[]='premeo';

echo "pre";
print_r($cars);
echo "</pre>";
echo '<br/>........................<br/>' ;


$cars[8]='suzuki';

echo "pre";
print_r($cars);
echo "</pre>";
echo '<br/>........................<br/>' ;

$cars[]='corola';

echo "pre";
print_r($cars);
echo "</pre>";
echo '<br/>........................<br/>' ;

//associative array


$fruits = array('a'=>'apple','b'=>'banana');
$fruits[] = 'this is a value';
echo "pre";
print_r($fruits);
echo "</pre>";
echo $fruits['a'];
echo '<br/>........................<br/>' ;

