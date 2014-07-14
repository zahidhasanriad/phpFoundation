<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author LAB5
 */
class Account {
    private $name;
    private $number;
    private $balance;
    
    function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
       $this->balance = 0;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount)
           {
        
        $this->balance =  $this->balance + $amount;
           }
           
           public function withdraw($amount)
           {
        
              if($this->balance - $amount >=0){
        $this->balance =  $this->balance - $amount;
                return 'withdrwan';
              }
              
 else { return 'insufficient balance';}
           }

}
