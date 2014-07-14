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

            input
                {
                    color: #A98DF8;
                }
        </style>
        
    </head>
    
    <body>
        <form action="arithmatic_calculation.php" method="GET">
            <p>First No : <input type="text" name='first_no_text'></p> 
            <p>Second No : <input type="text" name='second_no_text'></p> 
            
            <input type="submit" name="add" value ="Add"/>
            <input type="submit" name="subtract" value ="Subtract"/>
            <input type="submit" name="multiply" value ="Multiply"/>
            <input type="submit" name="divide" value ="Divide"/>
        </form>
        
        <?php
        require 'calculator.php';
        
        $calculator = new Calculator();
        
        if(isset($_GET['first_no_text']) && isset($_GET['second_no_text']))
            {
              
         $calculator->first_no = $_GET['first_no_text'] ;
        $calculator->second_no = $_GET['second_no_text'];
            }
        
        if(isset($_GET['add'])){
        echo 'Addition of two number: '.$calculator->add($calculator->first_no,$calculator->second_no);
        }
        
        else if(isset($_GET['subtract'])){
        echo 'Subtraction of two number: '.$calculator->subtract($calculator->first_no,$calculator->second_no);
        }
        
        else if(isset($_GET['multiply'])){
        echo 'Multiplication of two number: '.$calculator->multiply($calculator->first_no,$calculator->second_no);
        }
        
        else if(isset($_GET['divide'])){
            
                echo 'Dividation of two number: '.$calculator->divide($calculator->first_no,$calculator->second_no);
        }
        
            
        ?>
        
        
        
        
     </body>
     
</html>