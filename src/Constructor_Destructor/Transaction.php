<?php
declare(strict_types=1);

class Transaction
{
    public string $owner;
    public string $accountNumber;

    public float $balance;

    public function __construct(string $owner,string $accountNumber, float $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;

    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
    }

    public function showBalance()
    {
        echo "Account Holder : {$this->owner}" . "<br>";
        echo "Account Number : {$this->accountNumber}" . "<br>";
        echo "Account Balance : {$this->balance}" . "<br>";
    }

}