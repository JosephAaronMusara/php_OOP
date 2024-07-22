<?php

declare(strict_types = 1);

require_once 'Customer.php';
require_once 'PaymentProfile.php';
require_once 'Transactions.php';

$transaction = new Transactions(25,'Test amount');

echo $transaction->customer->paymentProfile->id;
echo $transaction?->customer?->paymentProfile->id;//null safe operator
//allows nested properties to be accessed even if they are preceeded by null values
//if the first value is null, the whole expression will return null or everything on the right will be discarded
//read-only
//dont use it wit important functions that must be run nomatter what
//use it with caution
//can be used together with null callable (??) operator
