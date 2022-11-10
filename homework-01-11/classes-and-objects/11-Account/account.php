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

    public function balance(): int
    {
        return $this->balance;
    }

    public function getAccount (): string
    {
        return $this->name . $this->balance;
    }

    public function withdrawal(int $withdraw): int
    {
        return $this->balance -= $withdraw;
    }

    public function deposit(int $deposit): int
    {
        return $this->balance += $deposit;
    }

    public function transferToAccount (Account $account, Account $transfer): string
    {
        return $this->balance - $this->withdrawal() . $this->deposit();
    }

    public function transfer(Account $from, Account $to, int $howMuch)
    {

    }
}
