<?php

class SavingsAccount
{
    private int $amount;
    private int $withdraw;
    private int $deposit;
    private int $balanceInterest;

    public function __construct(int $amount, int $withdraw, int $deposit, int $balanceInterest)
    {
        $this->amount = $amount;
        $this->withdraw =$withdraw;
        $this->deposit = $deposit;
        $this->balanceInterest = $balanceInterest;
    }

    public function setInterestRate (int $const = 12, int $interest = 5): int
    {
        $monthlyInterest = $interest / $const;
        $result = $monthlyInterest * $this->amount;
        $this->amount += $result;
        return $this->amount;
    }

    public function setAmount (int $amount): int
    {
        $this->amount = $amount;
    }

    public function getAmount (): int
    {
        return $this->amount;
    }

    public function setBalanceInterest (int $balanceInterest): int
    {

    }

    public function getBalanceInterest (): int
    {
        return $this->balanceInterest;
    }

    public function setWithdraw (int $withdraw): int
    {
        $this->withdraw -= $this->amount;
        return $this->withdraw;
    }

    public function getWithdraw (): int
    {
        return $this->withdraw;
    }

    public function setDeposit ():int
    {

    }

    public function getDeposit (): int
    {
        return $this->deposit;
    }

    public function setEndingBalance (): float
    {

    }

    public function getEndingBalance(int $amount): float
    {
        $interest = 5;
        $const = 12;
        return ;
    }
}

$client = new SavingsAccount();

echo $howMuchAmount = (int)readline("\nHow much money is in the account?: \n");
$client->setDeposit();
echo $annualInterestRate = (int)readline("\nEnter the annual interest rate: \n");
echo $openedAccount = (int)readline("\nHow long has the account been opened?: \n");

for ($i = 1; $i <= $openedAccount; $i++) {
    echo $depositPerMonth = (int)readline("\nEnter amount deposited for month {$i}: \n");
    echo $withdrawAmount = (int)readline("\nEnter amount withdrawn for {$i}: \n");
}

echo "Total deposited: {$client->getDeposit()}";
echo "Total withdrawn: {$client->getWithdraw()}";
echo "Interest earned: {$client->getBalanceInterest()}";
echo "Ending balance: ";


//Total deposited: $7,830.00
//Total withdrawn: $5,777.00
//Interest earned: $29,977.72
//Ending balance: $42,030.72