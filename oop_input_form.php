<?php


//new class inputForm
class inputForm { 

var $id = "";
	var $Name= "";
		var $Salary="";
	

			//constructor function
			function __construct($id ="007", $names ="James",$salary = 10000){

		
		$this->id= $id;
		$this->names= $names;
		$this->salary= $salary;
	}

	function getID(){

		return $this->id;
	}

	function getNames(){

		return $this->names;
	}

	function getSalary(){

		return $this->salary;
	}








}


$inputForm1 = new inputForm(); //New object inputForm1

echo "Id is"."  ".$inputForm1->getID(); //getID method is called for $inputForm1 object
echo "<br />";
echo "Name is"."  ".$inputForm1->getNames(); //getNames method is called for $inputForm1 object
echo "<br />";
echo "Salary is"."  ".$inputForm1->getSalary(); //getSalary method is called for $inputForm1 object
echo "<br />";

echo "<br />";
$inputForm2 = new inputForm("008","Kams Bond",20000); //New object inputForm2

echo "Id is"."  ".$inputForm2->getID(); //getID method is called for $inputForm2 object
echo "<br />";
echo "Name is"."  ".$inputForm2->getNames(); //getNames method is called for $inputForm2 object
echo "<br />";
echo "Salary is"."  ".$inputForm2->getSalary(); //getSalary method is called for $inputForm2 object
echo "<br />";