
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>str_split()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>str_split()</code> is used to splits a string into an array.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">str_split(string,length)</div>            
            
            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> – Required. Specifies the string to split.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">length</strong> <span class="badge bg-secondary">Optional</span> – Specifies the length of each array element. Default is 1
                        </li>
                    </ul>
                </div>
            </div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$string = "GeeksforGeeks"; 
print_r(str_split($string, 4)); 
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $string = "GeeksforGeeks"; 
                
                
            ?>
            <div class="output-box"><?php print_r(str_split($string, 4));   ?></div>
        </div>
    </div>
</div>
</main>

</body>
</html>
