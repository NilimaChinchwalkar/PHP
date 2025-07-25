
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>stristr()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>stristr()</code> function finds the first occurrence of a substring in a string. 
                It returns the portion of the string starting from the first occurrence of the specified substring.
                This function is case-insensitive.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">stristr( string, search, before );</div>

            <h5 class="text-success mt-4">📝 Example 1 :</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
echo stristr("chinchwalkarnilima@gmail.com", "@", true);  
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $string = "chinchwalkarnilima@gmail.com";
                $output = stristr($string, '@', true);
            ?>
            <div class="output-box"><?php echo $output; ?></div>

            
            <h5 class="text-success mt-4">📝 Example 2 :</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
echo stristr("chinchwalkarnilima@gmail.com", "@");  
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $string = "chinchwalkarnilima@gmail.com";
                $output = stristr($string, '@');
            ?>
            <div class="output-box"><?php echo $output; ?></div>
        </div>
    </div>
</div>
</main>

</body>
</html>
