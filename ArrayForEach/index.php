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
    </head>
    <body>
        <?php
       
        require_once 'account.php';
        
        $account1 = new Account('sv-001', '2014-7-15');
        $account1->deposit(10000);
        $account1->withdraw(5000);
        
        $account2 = new Account('ch-001', '2012-7-15');
        $account2->deposit(4000);
        
        $account3 = new Account('sv-002', '2010-7-15');
        $account3->deposit(50000);
        $account3->withdraw(60000);
        
        $accounts = array();
        $accounts[]=$account1;
        $accounts[]=$account2;
        $accounts[]=$account3;
        
        foreach ($accounts as $an_account) {
            
            echo 'Account Number '.$an_account->get_account_number().'<br/>';
            echo 'Opening Date '.$an_account->get_opening_date().'<br/>';
            echo 'Balance '.$an_account->get_balance().'<br/>';
            echo '<br/>';
            
        }
                
        
        
        
        ?>
    </body>
</html>
