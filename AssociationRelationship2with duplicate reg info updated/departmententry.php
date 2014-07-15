<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <style>
            table{
                
                background-color: #6666ff;
            }
        </style>
        
        
    </head>
    <body>
        <form method ="POST">
            <table>
                <tr>
            <td> Department Code : <input type ="text" name ="codeText"><br/> </td>
                </tr>
            <tr>    
            <td> Name : <input type ="text" name ="nameText"><br/></td>
            </tr>
            <tr>
                <td><input type="submit" value ="Save" name = 'save'></td>
            </tr>
            </table>
        </form>
        <?php
        {
            require 'department.php';
            session_start();
            if (isset($_POST['save']))
            {
                $department = new Department($_POST['codeText'], $_POST['nameText']);
                $_SESSION['department'] = $department;
                echo 'department created';
            }
        }
        ?>
    </body>
</html>
