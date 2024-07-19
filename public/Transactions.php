<?php

class Transactions
{
    public float $amount;
    public string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }
}