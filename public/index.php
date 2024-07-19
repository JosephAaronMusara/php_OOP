<?php

declare(strict_types = 1);

require_once 'Transactions.php';

$transaction = new Transactions(100,'Payment For Uncle Joe');

$transaction -> addTax(8);
$transaction -> applyDiscount(10);

echo'<pre>';
var_dump($transaction->getAmount());
echo'<br />';
var_dump( $transaction->getDescription());
echo'<pre />';