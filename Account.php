<?php

class Account
{
    private $balance = 0;
    public function __construct($balance){
        if($balance >= 0){
            $this->balance = $balance;
        }
    }
    public function credit($amount){
        $this->balance =  $this->balance +$amount;
    }
    public function debit($amount){
        if($amount <= $this->balance){
            $this->balance = $this->balance  - $amount;
        }
    }
    public function getBalance(){
        return $this->balance;
    }
}
