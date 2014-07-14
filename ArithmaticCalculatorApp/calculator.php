<?php


class Calculator {
    
    public $first_no;
    public $second_no;
    
    function add($first_no,$second_no)
    {
        $add_result = $first_no + $second_no;
        return $add_result;
        
    }
    
    function subtract($first_no,$second_no)
    {
        $subtract_result = $first_no - $second_no;
        return $subtract_result;
        
    }

    function multiply($first_no,$second_no)
    {
        $multiply_result = $first_no * $second_no;
        return $multiply_result;
        
    }

    
    function divide($first_no,$second_no)
    {
     if($second_no !=0){
     $divide_result = $first_no / $second_no;
        return $divide_result;
     }
     if($second_no ==0){
     
        $divide_error = 'Divide Error';
        return $divide_error;
     }
     
    } 
    
    
    
    
    
    }
