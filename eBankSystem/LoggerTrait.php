<?php 

trait LoggerTrait {
    private $transactionLog = [];

    protected function log($message) {
        $this->transactionLog[] = "[" . date("Y-m-d H:i:s") . "] " . $message;
    }

    public function getTransactionHistory() {
        return implode("<br>", $this->transactionLog);
    }
}

?>