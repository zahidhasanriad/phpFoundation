<?php


    class Person 
        {
    
        private $first_name;
        private $middle_name;
        private $last_name;
        
        function __construct($first_name, $middle_name, $last_name) {
            $this->setFirst_name($first_name);
            //$this->first_name = $first_name;
            $this->middle_name = $middle_name;
            $this->last_name = $last_name;
        
            //echo 'zess';
        }
        
        
        
        public function getFirst_name() {
            return $this->first_name;
        }

        public function getMiddle_name() {
            return $this->middle_name;
        }

        public function getLast_name() {
            return $this->last_name;
        }

        public function setFirst_name($first_name) {
            $this->first_name = $first_name;
            return $first_name;
        }

        public function setMiddle_name($middle_name) {
            $this->middle_name = $middle_name;
            return $middle_name;
        }

        public function setLast_name($last_name) {
            $this->last_name = $last_name;
            return $last_name;
        }

             
                
        
            public function get_full_name()
                    {
                    
                        return $this->first_name.' '.$this->middle_name.' '. $this->last_name;
                    }
            
                public function get_reverse_name()
                    {
                    
                    $full_name= $this->get_full_name();
                    $reverse_name = strrev($full_name); //strrev for string reverse
                    return $reverse_name;
                    
                    }
                    
                    
                    
            
        }
