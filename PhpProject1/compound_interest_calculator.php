<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of borrower
 *
 * @author LAB5
 */
class InterestCalculator{
 
    public $principal_amountt;
    public $annual_interest_rate;
    public $compound_time_interval;
    public $time_period;
    
    
   
    function get_total_compound_interest_amount(){
        
        
    if($this->compound_time_interval == "monthly")
   {
    $this->time_period= $this->time_period*12;
   } 
       
            
            $compound_interest_amount = 
            return $compound_interest_amount;
        
        
        
        
        
    }
    
    
    
}
