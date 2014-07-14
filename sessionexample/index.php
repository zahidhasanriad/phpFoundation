<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style>
            
            body 
                {
                    background-color: #d0e4fe;
                    color :#A98DF8;
                }

          
        </style>
    </head>
    <body>
        
        <?php
         
       // $a_number = 100;
        session_start();
         $a_number = $_SESSION['number1'];
        $_SESSION['number1'] = $_SESSION['number1']+ 10;
        
        echo $_SESSION['number1'];
        
        ?>
        
    </body>
    
</html>


