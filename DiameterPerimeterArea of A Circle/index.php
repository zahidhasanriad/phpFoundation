<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <form action ="index.php" method = "GET">
            Enter Radius <input type="text" name="enterRadiusText">
            <input type="submit" name="submitButton" value="Show">
        
        </form>
        
        <?php
        
        require_once 'circle.php';
        
        if(isset($_GET["enterRadiusText"])){
            
            $circle = new Circle();
            echo 'Diameter '.$circle->get_diameter($_GET["enterRadiusText"]).'<br />';
            echo 'Perimeter '.$circle->get_perimeter($_GET["enterRadiusText"]).'<br />';
            echo 'Area '.$circle->get_area($_GET["enterRadiusText"]).'<br />';
            
            
        }
        
        
        ?>
    </body>
    
</html>
