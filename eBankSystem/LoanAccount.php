<?php 
class LoanAccount extends BaseAccount {
    private $interestRate;

    public function __construct($initialBalance, $interestRate = 10) {
        parent::__construct($initialBalance);
        $this->interestRate = $interestRate;
    }

    public function applyInterest() {
        $interest = ($this->balance * $this->interestRate) / 100;
        $this->balance += $interest;
        $this->log("Applied interest of Rs. $interest at {$this->interestRate}% rate.");
        return "Interest Rs. $interest applied. Balance: Rs. {$this->balance}<br>";
    }

    public function withdraw($amount) {
        return "Loan account does not support direct withdrawal.<br>";
    }
}
?>