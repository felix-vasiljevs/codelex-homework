<?php

class BankAccount
{
    private string $user;
    private float $balance;

    public function __construct(string $user, float $balance)
    {
        $this->user = $user;
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return abs($this->balance);
    }

    public function show_user_name_and_balance(): string
    {
        if ($this->balance < 0) {
            return $this->user . ', ' . '-' . '$' . number_format($this->getBalance(), 2);
        }
        return $this->user . ', ' . '$' . number_format($this->balance, 2);
    }
}

$bensonAccount = new BankAccount('Benson', -17.50);

echo $bensonAccount->show_user_name_and_balance() . PHP_EOL;


