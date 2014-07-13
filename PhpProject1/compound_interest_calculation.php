<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="compound_interest_calculation.php" method="GET">
            <p> Compound Interest Calculator </p>
            <p>Principal Amount: <input type="text" name='principal_amount_text'></p> 
            <p>Annual Interest Rate: <input type="text" name='annual_interest_rate_text'> %</p>
            <p>Compound Interval: 
                <select name='compound_time_interval_text'>
                    <option value="monthly">Monthly</option>
                    <option value="quarterly">Quarterly</option>
                    <option value="half_yearly">Half yearly</option>
                    <option value="yearly">Yearly</option>
                </select> year </p> 
            <p>Time Period: <input type="text" name='time_period_text'></p> 
            
            <input type="submit" name="submitButton" value='Calculate'/>
        </form>
        <?php
        require_once 'compound_interest_calculator.php';    
        
            if(isset($_GET['submitButton']))
            {
                
                
                $principal_amount=$_GET['principal_amount_text'];
                $annual_interest_rate=$_GET['annual_interest_rate_text'];
                $compound_time_interval=$_GET['compound_time_interval_text'];
                $time_period=$_GET['time_period_text'];
                
                
               $interest_calculator = new InterestCalculator();
                $interest_calculator->principal_amount = $_GET['principal_amount_text'];
                $interest_calculator->annual_interest_rate = $_GET['annual_interest_rate_text'];
                $interest_calculator->compound_time_interval = $_GET['compound_time_interval_text'];
                $interest_calculator->time_period = $_GET['time_period_text'];
                 $total_compound_interest_calculation = $interest_calculator->get_total_compound_interest_amount();
                
                echo 'Total Interst Amount is '.$total_compound_interest_calculation;
            }
        ?>
    </body>
</html>
