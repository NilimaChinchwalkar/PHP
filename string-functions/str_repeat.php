
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>str_repeat()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>str_repeat()</code> repeats a string a specified number of times.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">str_repeat(string,repeat)</div>            
            
            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> – Specifies the string to repeat
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">repeat</strong> <span class="badge bg-danger">Required</span> – Specifies the number of times the string will be repeated. Must be greater or equal to 0
                        </li>
                    </ul>
                </div>
            </div>

<!-- Include FontAwesome for icons -->
<script src="https://kit.fontawesome.com/YOUR_FA_KIT.js" crossorigin="anonymous"></script>


            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$str = "PhpCodeLabs"; 
print_r(str_repeat($str, 4)); 
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                  $str = "PhpCodeLabs"; 
                   
                
            ?>
            <div class="output-box"><?php print_r(str_repeat($str, 4));  ?></div>
        </div>
    </div>
</div>
</main>
</body>
</html>
