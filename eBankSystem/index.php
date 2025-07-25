<?php 
require_once 'BaseAccount.php';
require_once 'SavingAccount.php';
require_once 'CurrentAccount.php';
require_once 'LoanAccount.php';
session_start();


//Create Account
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['account'])) {
    $accountType = $_POST['accountType'];
    $initialAmount = $_POST['initialAmount'] ?? 0;
    $interestRate = $_POST['interest'] ?? 0;

    switch ($accountType) {
        case 'saving':
            $_SESSION['account'] = new SavingAccount($initialAmount);
            break;
        case 'current':
            $_SESSION['account'] = new CurrentAccount($initialAmount);
            break;
        case 'loan':
            $interest = $_POST['interest'] ?? 10;
            $_SESSION['account'] = new LoanAccount($initialAmount, $interest);
            break;
    }
}


$account = $_SESSION['account'] ?? null;
$message = '';


//Actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $account) {
    $amount = $_POST['amount'] ?? 0;
    
    switch ($_POST['action']) {
        case 'credit':
            $message = $account->credit($amount);
            break;
        case 'debit':
            $message = $account->debit($amount);
            break;
        case 'withdraw':
            $message = $account->withdraw($amount);
            break;
        case 'interest':
            if ($account instanceof LoanAccount) {
                $message = $account->applyInterest();
            }
            break;
        case 'reset':
            session_destroy();
            header("Location: index.php");
            exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" class="src">
</head>
<body>
    <div class="container">
        <h2>Bank System</h2>
        <?php if (!empty($message)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        <div class="card">
        <div class="card-body">
        <div class="form-box">
            <?php if (!$account): ?>
                <form method="post">
                    <div class="row align-items-start">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Account Type</label>
                            <select class="form-select form-select-sm mb-3" name="accountType" required>
                                <option value="">Select</option>
                                <option value="saving">Saving</option>
                                <option value="current">Current</option>
                                <option value="loan">Loan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Initial Amount</label>
                            <input type="number" class="form-control mb-3" name="initialAmount" required>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Interest Rate (%)</label>
                            <input type="number" name="interest" class="form-control mb-3" value="10">
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                    </div>
                </form>
            <?php else:  ?>
                <div class="account-box">
                    <form method="post" class="mb-3">
                        <div class="row align-items-start">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">Amount</label>
                                <input type="number" class="form-control mb-3" name="amount">
                            </div>
                        </div>
                        <input class="btn btn-success" type="submit" name="action" value="credit">
                        <input class="btn btn-warning" type="submit" name="action" value="debit">
                        <input class="btn btn-info" type="submit" name="action" value="withdraw">

                        <?php if ($account instanceof LoanAccount): ?>
                            <input type="submit" name="action" value="interest">
                        <?php endif; ?>

                        <input class="btn btn-secondary" type="submit" name="action" value="reset">
                    </form>

                    <div class="wallet-box">
                        <span class="wallet-icon">💼</span>
                        <div> Balance</div>
                        ₹<?= $account->getBalance(); ?>
                    </div>
                    
                    <?php if (isset($account)): ?>
                        <div class="mt-3">
                            <h5>Transaction History</h5>
                            <div class="border p-2">
                                <?php echo $account->getTransactionHistory(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            
             <?php endif; ?>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>