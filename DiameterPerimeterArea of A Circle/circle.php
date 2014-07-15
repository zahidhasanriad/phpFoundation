<?php


class Circle {

    public $radius;
    
    
    public function get_diameter($radius) {
        
        return 2 * $radius;
    }
    
    public function get_perimeter($radius) {
        
        return 2 * pi() * $radius;
        
    }
    
    public function get_area($radius) {
        
        return pi()* $radius * $radius ;
    }
    
}
