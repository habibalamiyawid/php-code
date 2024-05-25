<?php
class Account{
    private $accountNumber;
    private $balance;
    public function deposit(){
        echo "deposit";
    }
    public function withdraw(){
        echo "withdraw";
    }
}

$ac = new Account();
$ac-> balance = 1000;
$ac-> withdraw(100000);