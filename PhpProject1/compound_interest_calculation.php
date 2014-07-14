<?php


    class CompoundInterestCalculator
        {
 
            public $principal_amount;
            public $annual_interest_rate;
            public $compound_time_interval;
            public $time_period;
    
    
   
                function get_total_compound_interest_amount()
                    {
        
        
                        if($this->compound_time_interval == "monthly")
                            {
                                $compund_interval_interest= (($this->time_period/12)*($this->principal_amount * $this->annual_interest_rate/100));
                            } 
       
                        if($this->compound_time_interval == "quarterly")
                            {
                                $compund_interval_interest= (($this->time_period/3)*($this->principal_amount * $this->annual_interest_rate/100));
                            } 
   
                        if($this->compound_time_interval == "half_yearly")
                            {
                                $compund_interval_interest= (($this->time_period/2)*($this->principal_amount * $this->annual_interest_rate/100));
                            } 
   
                        if($this->compound_time_interval == "yearly")
                            {
                                $compund_interval_interest= (($this->time_period/1)*($this->principal_amount * $this->annual_interest_rate/100));
                            } 
            
                                 return $compund_interval_interest;
        
        
                    }
    
        }