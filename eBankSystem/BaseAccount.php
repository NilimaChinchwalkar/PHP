<?php 
include 'AccountInterface.php';
include 'LoggerTrait.php';

abstract class BaseAccount implements AccountInterface {
    use LoggerTrait;
    protected $balance;

    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
        $this->log("Account created with balance Rs. $initialBalance");
    }

    public function credit($amount) {
        $this->balance += $amount;
        $this->log("Credited Rs. $amount. New balance: Rs. {$this->balance}");
        return "Credited Rs. $amount. Balance: Rs. {$this->balance}<br>";
    }

    public function debit($amount) {
        if ($amount > $this->balance) {
            $this->log("Debit of Rs. $amount denied. Insufficient balance.");
            return "Insufficient balance. Cannot debit Rs. $amount<br>";
        }
        $this->balance -= $amount;
        $this->log("Debited Rs. $amount. New balance: Rs. {$this->balance}");
        return "Debited Rs. $amount. Balance: Rs. {$this->balance}<br>";
    }

    public function getBalance() {
        return $this->balance;
    }

    abstract public function withdraw($amount);
}

?>