
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>strchr()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>strchr()</code> is used to search for the first occurrence of a given string in another string and returns the rest of the string from original string starting from the first occurrence of search String 
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">strchr(string,search,before_search)</div>            
            
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
                            <strong class="text-primary">search</strong> <span class="badge bg-danger">Required</span> –  Specifies the string to search for.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">before_search</strong> <span class="badge bg-secondary">Optional</span> – A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.
                        </li>
                    </ul>
                </div>
            </div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$str = "striver has published 180 articles"; 
echo strchr("striver has published 180 articles","published",true);
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                  $str = "striver has published 180 articles"; 
                   
                
            ?>
            <div class="output-box"><?php echo strchr("striver has published 180 articles","published", true); ?></div>
            <br>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$str = "striver has published 180 articles"; 
echo strchr("striver has published 180 articles","published");
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                  $str = "striver has published 180 articles"; 
                   
                
            ?>
            <div class="output-box"><?php echo strchr("striver has published 180 articles","published"); ?></div>
        </div>
    </div>
</div>
</main>

</body>
</html>
