<?php 

class CurrentAccount extends BaseAccount {
    public function withdraw($amount) {
        if ($amount > $this->balance) {
            $this->log("Withdrawal of Rs. $amount failed due to insufficient funds.");
            return "Insufficient balance to withdraw Rs. $amount<br>";
        }
        $this->balance -= $amount;
        $this->log("Withdrawn Rs. $amount. New balance: Rs. {$this->balance}");
        return "Withdrawn Rs. $amount. Balance: Rs. {$this->balance}<br>";
    }
}
?>