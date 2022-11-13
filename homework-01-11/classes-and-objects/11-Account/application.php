<?php
require_once 'Account.php';
require_once 'Bank.php';

$bartos_account = new Account("Barto's account ", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland ", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartos_account->getAccount() . PHP_EOL;
echo $bartos_swiss_account->getAccount(). PHP_EOL;

$bartos_account->setWithdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->getBalance() . PHP_EOL;
$bartos_swiss_account->setDeposit(200);
echo "Barto's Swiss account balance is now: " . $bartos_swiss_account->getBalance() . PHP_EOL;

echo "Final state";
echo $bartos_account->getAccount() . PHP_EOL;
echo $bartos_swiss_account->getAccount() . PHP_EOL;
echo PHP_EOL;

$matt_account = new Account("Matt's account" ,1000);
$my_account = new Account("My account",0);

$bigBank = new Bank($matt_account, $my_account);

echo "{$matt_account->getName()} has made a deposit to your account $" . $bigBank->transferToAccount(100) . PHP_EOL;

$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);

$transferFromAToB = new Bank($a, $b);
echo "{$a->getName()} has received a deposit of $" . $transferFromAToB->transferToAccount(50) . " from {$b->getName()}.". PHP_EOL;

$transferFromBToC = new Bank($b, $c);
echo "{$b->getName()} has received a deposit of $" . $transferFromBToC->transferToAccount(25) . " from {$c->getName()}.". PHP_EOL;


