
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">
        
    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">PHP <code>Char Count In String</code> </h3>
            </div>
            <div class="card-body">
        <?php
            $string = "PHP is a programming language";
            $charCountArr = [];

            for($i = 0; isset($string[$i]); $i++){
                $char = $string[$i];
                if(isset($charCountArr[$char])){
                    $charCountArr[$char]++;
                }
                else{
                    $charCountArr[$char] = 1;
                }
            }

            //Display
            foreach($charCountArr as $char => $count){                
                echo "'$char' appears $count times"."<br>";
            }


    ?>
    </main>
    
    </body>
    </html>
    