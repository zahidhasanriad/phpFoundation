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
class Borrower {
 
    public $principalAmount;
    public $annualinterestRate;
    public $timePeriod;
    
    
    function getTotalInterestAmount(){
        $principalAmount = $this->principalAmount;
        $annualinterestRate = $this->annualinterestRate/100;
        
        $timePeriod = $this->timePeriod;
        $totalInterest =$principalAmount * $annualinterestRate * $timePeriod;
        $totalInterestAmount =  $totalInterest + $principalAmount ;
        return $totalInterestAmount;
        
    }
    
    
    
}
