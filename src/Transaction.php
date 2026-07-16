<?php

declare(strict_types=1);
class Transaction
{
    public float $amount;
    public string $description;

    function set_deatils($amount, $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    function get_details()
    {
        echo "Amount of you pay is : " . $this->amount . "<br>" .
            "Account Number : " . $this->description . "<br>";
    }
}