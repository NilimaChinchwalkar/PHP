
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>strtoupper()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>strtoupper()</code> function returns the string with all characters in Upper Case.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">strtoupper( $string )</div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$str = "geeksforgeeks";
$upperCase = strtoupper($str);
echo $upperCase;
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                
                $str = "geeksforgeeks";
                $upperCase = strtoupper($str);
                
            ?>
            <div class="output-box"><?php echo $upperCase ?></div>
        </div>
    </div>
</div>

</main>
</body>
</html>
