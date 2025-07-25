
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>strpos()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>strpos()</code> finds the position of the first occurrence of a string inside another string.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">strpos(string,find,start)</div>            
            
            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> – Specifies the string to search.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">find</strong> <span class="badge bg-danger">Required</span> – Specifies the string to find.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">start</strong> <span class="badge bg-secondary">Optional</span> – Specifies where to begin the search.
                        </li>
                    </ul>
                </div>
            </div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$string = "I love php, I love php too!"; 
$position = strpos($string, 'php', 10);

if (is_numeric($position))
{
    $result =  "Found at position: " . $position;
}
else
{
    $result =  "Not Found";
}
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $string = "I love php, I love php too!"; 
                $position = strpos($string, 'php', 10);
                if (is_numeric($position))
                {
                    $result =  "Found at position: " . $position;
                }
                else
                {
                    $result =  "Not Found";
                }
                 
                
            ?>
            <div class="output-box"><?php echo $result; ?></div>

        </div>  
    </div>
</div>
</main>

</body>
</html>
