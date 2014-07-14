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
        <form action="area_of_circle.php" method="GET">
            <p>Radius of circle : <input type="text" name='radius_of_circle_text'></p> 
            <input type="submit" name="submitButton" value ="Area"/>
        </form>
        
        <?php
        require_once 'circle.php';
        
        if(isset($_GET['submitButton']))
            {
               //$radius_of_circle=$_GET['radius_of_circle_text'];
        
        $circle = new Circle();
        $circle->radius = $_GET['radius_of_circle_text'] ;
        
        echo 'Area of the circle: '.$circle->get_area_of_a_circle();
        
        
            }
        ?>
        
        
        
        
     </body>
     
</html>