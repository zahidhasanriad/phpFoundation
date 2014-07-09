<?php

$x= 100/(2*5);
$y= 100%(2*5);
$z= 100/2*5;
$a= 0/5;
$b= 0%5;

echo $x."<br/>";//10
echo $y."<br/>";//0
echo $z."<br/>";//250
echo $a."<br/>";//0
echo $b."<br/>";//0
echo"<br />............" ;
//Unary operators

$a=2;

echo $a++."<br />"; //2
echo $a--."<br />"; //3
echo ++$a."<br />"; //3
echo --$a."<br />"; //2
echo $a."<br />"; //2

echo"<br />............" ;
echo $a.PHP_EOL;
echo ++$a;
echo"<br />............" ;

$a=4;
$b=2;

echo ++a *(a++ + --b); //bracket will work first

echo"<br />............" ;