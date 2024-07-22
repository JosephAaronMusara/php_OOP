<?php

//Constructor Property Promotion - reduces the boilerplate and does declaration and assignment for you
//no callable
//you can combine promoted and class properties
//no duplicates (property )
//you can also promote untyped properties
//you can set default values too but they have to be simple statements
//if assigning a default value of null, you have to make the property nullable
// e.g private ?float $amount = null and not private float $amount = null

class Transactions
{
    public ?Customer $customer =null;
    
    public function __construct(
        private float $amount, 
        private string $description
        ){
            //echo $this -> amount;
            echo $amount;
    }
}

