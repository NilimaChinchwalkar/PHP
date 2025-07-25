
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>str_pad()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>str_pad()</code> is used to pad a string to a given length.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">str_pad(string,length,pad_string,pad_type)</div>            
            
            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> – Specifies the input string to be padded.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">length</strong> <span class="badge bg-danger">Required</span> – Specifies the new string length.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">pad_string</strong> <span class="badge bg-secondary">Optional</span> – Specifies the string to use for padding (default is whitespace).
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">pad_type</strong> <span class="badge bg-secondary">Optional</span> – Specifies what side to pad the string:
                            <ul class="mt-1">
                                <li><code>STR_PAD_BOTH</code> – Pads both sides (right side gets extra padding if uneven).</li>
                                <li><code>STR_PAD_LEFT</code> – Pads the left side.</li>
                                <li><code>STR_PAD_RIGHT</code> – Pads the right side (default).</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$str = "Geeks for geeks"; 
echo str_pad($str, 21, "-", STR_PAD_BOTH);  
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                  $str = "Geeks for geeks"; 
                   
                
            ?>
            <div class="output-box"><?php echo str_pad($str, 21, "-", STR_PAD_BOTH  );  ; ?></div>
        </div>
    </div>
</div>
</main>

</body>
</html>
