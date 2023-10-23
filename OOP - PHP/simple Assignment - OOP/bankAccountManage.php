<?php
/*

# Bank Account Management:

Create a BankAccount class with properties like account number, account holder name, and balance. Implement methods for deposit, withdrawal, and balance inquiry. Ensure that the balance cannot go below zero.

*/
class BankAccount{
    public  $accountNumber;
    public  $accountHolderName;
    public  $balance;

    public  function setAccountHolderName($accountHolderName) {
        $this->accountHolderName = $accountHolderName;
    }
    public  function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }
    public  function setBalance($balance) {
        $this->balance = $balance;
    }

    public  function getAccountNumber() {
        return $this->accountNumber;
    }
    public  function getAccountHolderName(){
        return $this->accountHolderName;
    }
    public  function getBalance(){
        return $this->balance;
    }

}

$bankStatement = new BankAccount();
$bankStatement->setAccountHolderName("Yahya Mahmud");
echo $bankStatement->getAccountHolderName();