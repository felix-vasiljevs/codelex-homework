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

    public function getInterestRate (int $const = 12, int $interest = 5): int
    {
        $monthlyInterest = $interest / $const;
        $result = $monthlyInterest * $this->amount;
        $this->amount += $result;
        return $result;
    }

    public function setAmount (int $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount (): int
    {
        return $this->amount;
    }

    public function getBalanceInterest (): int
    {
        return $this->balanceInterest;
    }

    public function setWithdraw (int $withdraw): int
    {
        $withdrawSum = 0;
        $this->withdraw -= $this->amount;
        return $this->withdraw;
    }

    public function getWithdraw (int $withdraws): int
    {
        $totalWithdrawn = 0;
        $totalWithdrawn += $this->withdraw;
        return $totalWithdrawn;
    }

    public function setDeposit (int $deposit): void
    {
        $totalDeposit = 0;

        for ($i = 0; $i <= strlen($deposit); $i++) {
            $totalDeposit += $i;
        }

        $this->deposit += $totalDeposit;
    }

    public function getDeposit (): int
    {
        return $this->deposit;
    }

    public function getEndingBalance(int $deposit, int $withdrawn, float $interestEarned): float
    {
        return $this->getDeposit() + $this->getWithdraw($withdrawn) + $this->getBalanceInterest();
    }
}

echo $howMuchAmount = (int)readline("How much money is in the account?: ");
echo $annualInterestRate = (int)readline("Enter the annual interest rate: ");
echo $openedAccount = (int)readline("How long has the account been opened?: ");

for ($i = 1; $i <= $openedAccount; $i++) {
    echo $depositPerMonth = (int)readline("Enter amount deposited for month {$i}: ");
    echo $withdrawAmount = (int)readline("Enter amount withdrawn for {$i}: ");
}

$client = new SavingsAccount($howMuchAmount, $withdrawAmount, $depositPerMonth, $annualInterestRate);

echo "Total deposited: {$client->getDeposit($depositPerMonth)}";
echo "Total withdrawn: {$client->getWithdraw($withdrawAmount)}";
echo "Interest earned: {$client->getInterestRate()}";
echo "Ending balance: {$client->getEndingBalance($howMuchAmount, $withdrawAmount, $client->getInterestRate())}";
echo PHP_EOL;

//Total deposited: $7,830.00
//Total withdrawn: $5,777.00
//Interest earned: $29,977.72
//Ending balance: $42,030.72
