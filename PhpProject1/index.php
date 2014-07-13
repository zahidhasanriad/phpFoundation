<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <p>Id: <input type="text" name="idText"></p> 
            <p>Name: <input type="text" name="nameText"></p>
            <p>Salary: <input type="text" name="salaryText"></p> 
            <input type="submit" name="submitButton" />
        </form>
        <?php
            if(isset($_GET['submitButton']))
            {
                require_once 'officeemployee.php';
                
                $id=$_GET['idText'];
                $name=$_GET['nameText'];
                $salary=$_GET['salaryText'];
                
                $anEmployee = new OfficeEmployee();
                $anEmployee->id = $_GET['idText'];
                $anEmployee->name = $_GET['nameText'];
                $anEmployee->salary = $_GET['salaryText'];
                
                
                echo $anEmployee->id.' '.$anEmployee->name.' '.$anEmployee->salary;            
            }
        ?>
    </body>
</html>
