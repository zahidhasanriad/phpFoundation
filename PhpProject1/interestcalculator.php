<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="interestcalculator.php" method="GET">
            <p> Simple Interest Calculator </p>
            <p>Principal Amount: <input type="text" name='principalAmountText'></p> 
            <p>Annual Interest Rate: <input type="text" name='annualinterestRateText'> %</p>
            <p>Time Year: <input type="text" name='timePeriodText'> year </p> 
            <input type="submit" name="submitButton" />
        </form>
        <?php
        require_once 'interestcalculation.php';    
        
            if(isset($_GET['submitButton']))
            {
                
                
                $principalAmount=$_GET['principalAmountText'];
                $annualinterestRate=$_GET['annualinterestRateText'];
                $timePeriod=$_GET['timePeriodText'];
                
               $borrower = new Borrower();
                $borrower->principalAmount = $_GET['principalAmountText'];
                $borrower->annualinterestRate = $_GET['annualinterestRateText'];
                $borrower->timePeriod = $_GET['timePeriodText'];
                 $total_interest_calculation = $borrower->getTotalInterestAmount();
                
                echo 'Total Interst Amount is '.$total_interest_calculation;
            }
        ?>
    </body>
</html>
