<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            
            body 
                {
                    background-color: #d0e4fe;
                }

            p 
                {
                    font-family: "Times New Roman";
                    font-size: 20px;
                    color: #AFB798;
                }

            option
                {
                    color: #EEAD98;
                }

            input
                {
                    color: #A98DF8;
                }
                
        </style>

    </head>
    
    <body>
        <form action="lunch_bill_calculator.php" method="GET">
            <p> You have taken </p>
            <p>Rice: <input type="text" name='rice_amount_text'>Unit(20taka/unit)</p> 
            <p>Vegetable: <input type="text" name='vegetable_amount_text'> Unit(30taka/unit)</p>
            <p>Fish: <input type="text" name='fish_amount_text'>Unit(80taka/unit)</p> 
            <p>Meat: <input type="text" name='meat_amount_text'>Unit(120taka/unit)</p>
            <p>VAT: <input type="text" name='vat_amount_text'>% of Gross Total</p>
            <input type="submit" name="submitButton" value='Show Bill'/>
        </form>
        
            <?php
                require_once 'lunch_bill_calculation.php';    
        
                    if(isset($_GET['submitButton']))
                        {
                
                
                            $rice_amount=$_GET['rice_amount_text'];
                            $vegetable_amount=$_GET['vegetable_amount_text'];
                            $fish_amount=$_GET['fish_amount_text'];
                            $meat_amount=$_GET['meat_amount_text'];
                            $vat_amount=$_GET['vat_amount_text'];
                
                
                            $lunch_bill_calculation = new LunchBillCalculation();
                            $lunch_bill_calculation->rice_amount = $_GET['rice_amount_text'];
                            $lunch_bill_calculation->vegetable_amount = $_GET['vegetable_amount_text'];
                            $lunch_bill_calculation->fish_amount = $_GET['fish_amount_text'];
                            $lunch_bill_calculation->meat_amount = $_GET['meat_amount_text'];
                            $lunch_bill_calculation->vat_amount = $_GET['vat_amount_text'];
                           
                
                           echo 'Gross Total: '.$lunch_bill_calculation->gross_total_amount().'<br />';
                           echo 'Payable Amount: '.$lunch_bill_calculation->payable_amount();
                        }
            ?>

        
    </body>

 </html>
