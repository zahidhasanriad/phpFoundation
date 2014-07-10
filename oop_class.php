<?php

//Declaring a class

class User 
{

	var $name = "FTFL";
	var $email = "";
	

	function getName(){

		return "FTFL2";
	}


}

//Isntantiation of a class

$user = new User();

//Visualize a object from class Student

var_dump($user); 

//accessing property of a class
echo $user->name;

echo $user->getName();