<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
                    <td>Student Reg no : <input type ="text" name ="regNoText"><br/></td>
                </tr>
                <tr>
                    <td>Name : <input type ="text" name ="nameText"><br/></td>
                </tr>
                <tr>
                    <td>Email : <input type ="text" name ="emailText"><br/></td>
                </tr>
                <tr> 
                    <td><input type="submit" value ="Save" name='save'></td>
                </tr>
            </table>
        </form>
        <?php
         {
             require_once 'student.php';
             require_once 'department.php';
             session_start();
             if(isset($_POST['save']))
             {
                 $student = new Student($_POST['regNoText'], $_POST['emailText'], $_POST['nameText']);
                 /* @var $department Department */
                 $department = $_SESSION['department'];
                 
                 echo $department->add_student($student);
                 $_SESSION['department']= $department;
                 
             }
         }
        ?>
    </body>
</html>
