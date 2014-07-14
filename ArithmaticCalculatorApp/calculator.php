<?php


class Calculator {
    
    public $first_no;
    public $second_no;
    
    function get_add_result_of_two_numbers($first_no,$second_no)
    {
        $add_result = $first_no + $second_no;
        return $add_result;
        
    }
    
    function get_subtract_result_of_two_numbers($first_no,$second_no)
    {
        $subtract_result = $first_no - $second_no;
        return $subtract_result;
        
    }

    function get_multiply_result_of_two_numbers($first_no,$second_no)
    {
        $multiply_result = $first_no * $second_no;
        return $multiply_result;
        
    }

    
    function get_divide_result_of_two_numbers($first_no,$second_no)
    {
        $divide_result = $first_no / $second_no;
        return $divide_result;
        
    }
    
    
    }
