
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>strlen()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>strlen()</code> calculates the length of the string including all the whitespaces and special characters.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">strlen( $string )</div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$str = "welcome to GeeksforGeeks";
$len = strlen($str);
echo "String Length: " . $len;
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                
                $str = "welcome to GeeksforGeeks";
                $len = strlen($str);
            ?>
            <div class="output-box"><?php echo "String Length: " . $len; ?></div>
        </div>
    </div>
</div>
</main>
</body>
</html>
