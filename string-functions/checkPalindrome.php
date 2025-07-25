
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">
        
    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">PHP <code>substr()</code> Function</h3>
            </div>
            <div class="card-body">
        <?php
     function checkPalindrome($str){
        for($i = 0; $i < strlen($str) / 2; $i++){
            if($str[$i] !== $str[strlen($str) -$i - 1 ]){
                return false;
            }
        }
        return true;
        }

        $input = "madam";
        if (checkPalindrome($input)) {
            echo "$input is a palindrome.";
        } else {
            echo "$input is not a palindrome.";
        }
    ?>
    </main>
    
    </body>
    </html>
    