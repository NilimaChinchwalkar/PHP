
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
            $string = "programming";
            $reversed = "";

            for($i = strlen($string) - 2; $i >= 0; $i--){
                $reversed .= $string[$i];
                
            }
            echo $reversed;
            


    ?>
    </main>
    
    </body>
    </html>
    