<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employee
 *
 * @author LAB5
 */
class OfficeEmployee {
    
    public  $id;
    public $name;
    public $salary;
    
    
    public function get_salary_with_bonus() {
    
      $salary = $this->salary;       
        if($salary <=10000){
        return $salary+$salary*.50;
        }
        else if($salary>10000 && $salary<= 30000)
        return $salary+$salary*.30;
        
        else if($salary>30000)
           return $salary+$salary*.20; 
        
    }
}

//clean code needed like min salary range, maxsalary range, bonus percentage variable instead of number