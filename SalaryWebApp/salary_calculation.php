<?php

class SalaryCalculation 
{
    
    public $employee_name;
    public $basic_amount;
    public $house_rent;
    public $medical_allowance;
   
    
    
        public function get_total_salary_amount()
            {
        
                $basic_amount = $this->basic_amount;
                $house_rent = $this->house_rent;
                $medical_allowance = $this->medical_allowance;
       
                $total_house_rent =   ($basic_amount * $house_rent)/100;
                $total_medical_allowance = ($basic_amount * $medical_allowance)/100;
       
                $total_salary_amount = $basic_amount+$total_house_rent+$total_medical_allowance;
        
                     return $total_salary_amount;
        
            }
   
    
    
}
