<?php

//Constructor Property Promotion - reduces the boilerplate and does declaration and assignment for you
//no callable
//you can combine promoted and class properties
//no duplicates (property )

class Transactions
{
    public function __construct(
        private float $amount, 
        private string $description
        ){

            
    }
}