<?php
class Department {
    private $code;
    private $name;
    private $student_list;
    private $MAX_NO_OF_STUDENTS = 5;
    
    public function __construct($code, $name) {
        $this->name = $name;
        $this->code = $code;
        $this->student_list = array();
    }
    
  
    
    public function add_student($a_student){
        if(count($this->student_list) < $this-> MAX_NO_OF_STUDENTS){
            
            foreach ($this->student_list as $student) {
                if($a_student->get_reg_no() == $student->get_reg_no()){
                    
                // $this->student_list[] = $a_student;
                    
                    
                    
                    return 'Reg No Taken';
                }
            }
            
            $this->student_list[] = $a_student;
            return 'Student Added';
        }
        else{
            return 'No Vacancy';
        }
    }
    
            
    public function get_name()
    {
        return $this->name;
    }
    
    public function get_code()
    {
        return $this->code;
    }

    public function get_no_of_students() {
        
        return count($this->student_list);
    }
    
    public function get_all_students()
    {
        return $this->student_list;
    }

    
    
    
}
?>
