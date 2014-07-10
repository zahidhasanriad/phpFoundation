<?php

//Declaring a class

class User 
{

	var $name = "";
	var $email = "";
	

	function __construct($name ="FTFL", $email ="lict.ftfl.com"){

		$this->name= $name;
		$this->email= $email;
	}


	function getName(){

		return $this->name;
	}

	function getEmail(){

		return $this->email;
	}


}

//Isntantiation of a class

//$user = new User();

$user1 = new User();
//$user1->name = "FTFL1";

$user2 = new User('LICT');
//$user2->name = "FTFL2";

//Visualize a object from class Student

//var_dump($user); 
//
//accessing property of a class
//echo $user->name;
//$user->name = 'TestFTFL';

//echo $user->getName();
//echo"<br />";

echo $user1->getName();
echo $user1->getEmail();
echo"<br />";

echo $user2->getName();
echo $user2->getEmail();
echo"<br />";

//var_dump($user1);
//var_dump($user2);

echo "<br />........................<br />";

class User2{

	protected function userAge(){
		return 'some value';
	}
}

class Person extends User2{

	public function getUserAge(){

		return $this-> userAge();
	}

}

$person = new Person();

echo $person -> getUserAge();
echo "<br />";
echo $person -> userAge();
