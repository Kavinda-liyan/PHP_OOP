<?php

require_once '../Transaction.php';

$transaction = new Transaction();
$transaction->amount=15;

$transaction->set_deatils(24000,"COMBANK13185002");
$transaction->get_details();

var_dump($transaction);