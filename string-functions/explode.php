
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>explode()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>explode()</code> used to split a string into different strings.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">explode(separator, OriginalString, NoOfElements)</div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$OriginalString = "Hello, How can we help you?";
$output = explode(" ", $OriginalString, 4);
print_r($output);
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $OriginalString = "Hello, How can we help you?";
                
            ?>
            <div class="output-box"><?php print_r(explode(" ", $OriginalString, 4)); ?></div>
        </div>
    </div>
</div>
</main>

</body>
</html>
