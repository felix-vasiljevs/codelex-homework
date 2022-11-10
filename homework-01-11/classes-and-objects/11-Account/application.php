<?php

require 'account.php';


$bartos_account = new Account("Barto's account ", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland ", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartos_account->getAccount() . PHP_EOL;
echo $bartos_swiss_account->getAccount(). PHP_EOL;
echo PHP_EOL;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance() . PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: " . $bartos_swiss_account->balance() . PHP_EOL;
echo PHP_EOL;

echo "Final state";
echo $bartos_account->getAccount() . PHP_EOL;
echo $bartos_swiss_account->getAccount() . PHP_EOL;
echo PHP_EOL;

$matt_account = new Account("Matt's account" ,1000);
$my_account = new Account("My account",0);

//$matt_account->transferToAccount($matt_account, $my_account);
//
//echo $matt_account;






