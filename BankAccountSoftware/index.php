<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form>
            
            Customer Name: <input type="text" name='customerNameText'> <br />
             Account No: <input type="text" name='accountNoText'> 
            <input type='submit' name='createButton' value='Create'/> <br />
            Amount: <input type="text" name='amountText'> <br />
            <input type='submit' name='depositButton' value='Deposit'/>
            <input type='submit' name='withdrawButton' value='Withdraw'/><br />
            <input type='submit' name='showReportButton' value='Show Report'/>
           </form>
  
        
        <?php
       require_once 'account.php';
       session_start();
       
       if(isset($_GET['createButton']))
            {
           
           $account = new Account($_GET['customerNameText'], $_GET['accountNoText']);
           
           
           $_SESSION['an_account'] = $account;  
            
           echo 'created';
           
                   }
                   
                   
                   if(isset($_GET['depositButton']))
            {
                   
                       $account = $_SESSION['an_account'];
                       $account->deposit($_GET['amountText']);
                       $_SESSION['an_account'] = $account;
                       
                       echo 'deposited';
            }
                   
                   
             if(isset($_GET['withdrawButton']))
            {
                   
                       $account = $_SESSION['an_account'];
                       echo $account->withdraw($_GET['amountText']);
                       $_SESSION['an_account'] = $account;
                       
                       
            }
            
             if(isset($_GET['showReportButton']))
            {
                 $account = $_SESSION['an_account'];
                 
                 echo $account->getName().'<br />';
                 echo $account->getNumber().'<br />';
                 echo $account->getBalance().'<br />';
                 
                 
             }
            
        ?>
    </body>
</html>
