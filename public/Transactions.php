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

    public function addTax(float $rate): Transactions
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transactions
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
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