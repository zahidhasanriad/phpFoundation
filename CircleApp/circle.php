<?php

//define(PI, 3.14);

class Circle
    {
        public $radius;
    
            function get_area_of_a_circle()
                {
                    $radius_of_this_circle = $this->radius;
       
                    $area_of_a_circle =  $radius_of_this_circle * $radius_of_this_circle * 3.1416;
        
                        return $area_of_a_circle;
                }
    
    }

?>