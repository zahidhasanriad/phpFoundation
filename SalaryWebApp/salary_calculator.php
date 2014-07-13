<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        <form action="salary_calculator.php" method="GET">
            
            <p>Employee Name: <input type="text" name='employee_name_text'></p> 
            <p>Basic Amount: <input type="text" name='basic_amount_text'></p>
            <p>House Rent: <input type="text" name='house_rent_text'> % of Basic </p> 
            <p>Medical Allowance: <input type="text" name='medical_allowance_text'> % of Basic </p> 
            <input type="submit" name="submitButton" value="Show Me Salary" />
        </form>
       
        <?php
            require_once 'salary_calculation.php';    
        
                if(isset($_GET['submitButton']))
                    {
                
                
                        $employee_name=$_GET['employee_name_text'];
                        $basic_amount=$_GET['basic_amount_text'];
                        $house_rent=$_GET['house_rent_text'];
                        $medical_allowance =$_GET['medical_allowance_text'];
                
                        $salary_calculation = new SalaryCalculation();
                        $salary_calculation->employee_name = $_GET['employee_name_text'];
                        $salary_calculation->basic_amount = $_GET['basic_amount_text'];
                        $salary_calculation->house_rent = $_GET['house_rent_text'];
                        $salary_calculation->medical_allowance = $_GET['medical_allowance_text'];
                        $total_salary_calculation = $salary_calculation->get_total_salary_amount();
                
                        echo  $employee_name.','.'your total salary : '.$total_salary_calculation.'taka';
                    }
       ?>
    </body>
    
</html>
