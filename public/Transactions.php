<?php

class Transactions
{
    private float $amount;
    private string $description;

    //NB: all methods that dont have access modifiers are assume to be public
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate)
    {
        $this->amount += $this->amount * $rate / 100;
    }

    public function applyDiscount(float $rate)
    {
        $this->amount -= $this->amount * $rate / 100;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
}