<?php
interface AccountInterface {
    public function credit($amount);
    public function debit($amount);
    public function getBalance();
    public function getTransactionHistory();
}

?>