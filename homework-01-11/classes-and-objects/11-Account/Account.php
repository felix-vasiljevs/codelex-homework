<?php

class Account
{
    private string $name;
    private int $balance;
//    private int $deposit;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function getAccount (): string
    {
        return $this->name . $this->balance;
    }

    public function setWithdrawal(int $withdraw): int
    {
        $this->balance -= $withdraw;
        return $withdraw;
    }

    public function setDeposit(int $deposit): int
    {
        $this->balance += $deposit;
        return $deposit;
    }

}
