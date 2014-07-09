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

echo "++a *(a++ + --b)"; //bracket will work first

echo"<br />............" ;

$a= '0';
//$a = ' ';
echo (bool) $a; // type casted to boolean

echo (int) '123'; //123
echo (int) 'dfdfdfadsd'; //0
echo (int) '123asdasd'; // if value first then till character number showed 123
echo (int) 'sdasdas1254'; //if character first then 0

echo"<br />............" ;

//not operator or reverse operator

$a= '0';
//$a = ' ';
echo (bool) !$a; // type casted to boolean

echo"<br />............" ;

//comparison

$a = 3;
$b = 5;

if($a = $b){

echo "Hello"; // hello will be printed

}

if($a == $b){

	echo "Hello"; // hello will be printed
}

/*if( 3 = $a)
{

	echo "Hello"; 
}*/ //if we use this 3 can't be assigned any value so we need atleast ==

$a ='3';

if( 3 == $a)
{

	echo "Hello"; 
}

if( 3 === $a) //value & type check exactly eqaul to
{

	echo "Hello"; 
}

$a =3;

if( 3 == $a)
{

	echo "Hello"; 
}

if( 3 === $a)
{

	echo "Hello"; 
}

echo"<br />............" ;

$a ='3';

if( 3 == $a)
{

	echo "Hello"; 
}

if( 3 === $a) //value & type check exactly eqaul to
{

	echo "Hi"; 
}

echo"<br />............" ;