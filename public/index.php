<?php

declare(strict_types = 1);

require_once 'Transactions.php';

$transaction = (new Transactions(100,'Payment For Uncle Joe')) 
                -> addTax(8)
                -> applyDiscount(10)
                ->getAmount();

echo'<pre>';
var_dump($transaction);
echo'<pre />';