<?php


class LunchBillCalculation {
    



            public $rice_amount;
            public $vegetable_amount;
            public $fish_amount;
            public $meat_amount;
            public $vat_amount;
    
    
   
                
                            
                           
                        function gross_total_amount()
                                {
                                    $rice_bill = $this->rice_amount *20;
                                    $vegetable_bill = $this->vegetable_amount * 30;
                                    $fish_bill = $this->fish_amount * 80;
                                    $meat_bill = $this->meat_amount * 120;
                                    $gross_total_amount = $rice_bill + $vegetable_bill + $fish_bill + $meat_bill;
                               
                                    
                               
                                        return $gross_total_amount;
                                }
                            
                       function payable_amount()
                                {
                                    $payable_amount =($this->gross_total_amount()+ ($this->vat_amount/100)* $this->gross_total_amount()); 
                       
                                return $payable_amount;
                                }
        
                    }
    
        