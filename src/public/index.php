<?php
declare(strict_types=1);

/*
require_once '../Transaction.php';

$transaction = new Transaction();
$transaction->amount = 15;

$transaction->set_deatils(24000, "COMBANK13185002");
$transaction->get_details();

var_dump($transaction);
var_dump($transaction instanceof Transaction);
*/

require_once './src/Constructor_Destructor/Transaction.php';

$transaction = new Transaction("Kavinda", "COMBANK:1024506789", 124500);
$transaction->showBalance();

$transaction->deposit(32000);
$transaction->showBalance();