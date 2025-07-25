
    
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>strstr()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>strstr()</code> function finds the first occurrence of a substring in a string. 
                It returns the portion of the string starting from the first occurrence of the specified substring.
                This function is case-sensitive.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">strstr( $string, $search, $before );</div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
echo strstr("chinchwalkarnilima@gmail.com", "@", true);  
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $string = "chinchwalkarnilima@gmail.com";
                $output = strstr($string, '@', true);
            ?>
            <div class="output-box"><?php echo $output; ?></div>
        </div>
    </div>
</div>
</main>

</body>
</html>
