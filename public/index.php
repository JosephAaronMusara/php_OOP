<?php

declare(strict_types = 1);

require_once 'Transactions.php';

$transaction = new Transactions(23,'Payment For Uncle Joe');

var_dump($transaction);