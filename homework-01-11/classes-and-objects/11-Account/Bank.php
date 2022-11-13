<?php

class Bank
{
    private Account $account1;
    private Account $account2;

    public function __construct(Account $account1, Account $account2)
    {
        $this->account1 = $account1;
        $this->account2 = $account2;
    }

    public function transferToAccount (int $amount): int
    {
        $transfer = $this->account1->setWithdrawal($amount);
        return $this->account2->setDeposit($transfer);
    }
}