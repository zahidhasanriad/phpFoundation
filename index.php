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
                
                $Borrower = new OfficeEmployee();
                $Borrower->id = $_GET['idText'];
                $Borrower->name = $_GET['nameText'];
                $Borrower->salary = $_GET['salaryText'];
                 $anEmployee_with_bonus = $Borrower->get_salary_with_bonus();
                
                echo $Borrower->id.' '.$Borrower->name.' '.'salary'.$Borrower->salary.' '.'salary with bonus'.$anEmployee_with_bonus;            
            }
        ?>
    </body>
</html>
