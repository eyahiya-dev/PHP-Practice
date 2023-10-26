<?php
/*

# Bank Account Management:

Create a BankAccount class with properties like account number, account holder name, and balance. Implement methods for deposit, withdrawal, and balance inquiry. Ensure that the balance cannot go below zero.

*/
class BankAccount{
    private $accountNumber;
    private $accountHolderName;
    private $balance;

    public function __construct($accountNumber, $accountHolderName, $balance){
        $this->accountNumber = $accountNumber;
        $this->accountHolderName = $accountHolderName;
        $this->balance = $balance;
    }
    
    // Deposite method
    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
            return "Deposited {$amount}. New Balance : {$this->balance}";
        }else{
            return "Invalid Deposited amount. Amount must be greater than ZERO";
        }
    }

    // Withdrawal Method
    public function withdraw($amount){
        if($amount > 0){
            if($this->balance >= $amount){
                $this->balance -= $amount;
                return "Withdraw : {$amount}. New amount : {$this->balance}";
            }else{
                return "Insufficient Balance. Your Current Balance : {$this->balance}";
            }
        }else{
            return "Invalid withdrawal amount. Amount must be greater than ZERO";
        }
    }
    // Balance Inqueri Method
    public function balanceInquery(){
        return "Account Number : {$this->accountNumber}, Name : {$this->accountHolderName}, Balance : {$this->balance}";
    }
}

$account = new BankAccount('123456', 'Yahya Mahmud', 5000);
$account->deposit(2000);
$account->withdraw(500);
$checkAccount = $account->balanceInquery();
echo $checkAccount;