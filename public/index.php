<?php

declare(strict_types = 1);

require_once 'Transactions.php';

// $transaction1 = (new Transactions(100,'Payment For Uncle Joe')) 
//                 -> addTax(8)
//                 -> applyDiscount(10)
//                 ->getAmount();

// $transaction2 = (new Transactions(100,'Payment For Mr B1k')) 
//                 -> addTax(8)
//                 -> applyDiscount(10)
//                 ->getDescription();

// // unset($transaction1, $transaction2); -- this also desctucts just like the majic method destruct
// // Use mainly when you have resources in use e.g db connection

// echo'<pre>';
// var_dump($transaction1, $transaction2);
// echo'<pre />';