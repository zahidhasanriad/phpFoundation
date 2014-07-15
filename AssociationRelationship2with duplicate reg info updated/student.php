<?php

class Student {
    private $reg_no;
    private $email;
    private $name;
    
    public function __construct($reg_no, $email, $name) {
        $this->name = $name;
        $this->reg_no = $reg_no;
        $this->email = $email;
    }
    
    public function get_name()
    {
        return $this->name;
    }
    
    public function get_email()
    {
        return $this->email;
    }
    
    public function get_reg_no()
    {
        return $this->reg_no;
    } 
    
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_email($email) {
        $this->email = $email;
    }




   
 }

?>
