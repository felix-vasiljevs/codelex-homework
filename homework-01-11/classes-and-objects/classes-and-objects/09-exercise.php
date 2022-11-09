<?php

class BankAccount
{
    private string $user;
    private int $balance;

    public function __construct(string $user, int $balance)
    {
        $this->user = $user;
        $this->balance = $balance;
    }

    function show_user_name_and_balance(string $user)
    {

    }
}
