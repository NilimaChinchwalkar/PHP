
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>str_replace()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>str_replace()</code> replaces some characters with some other characters in a string.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">str_replace(find,replace,string,count)</div>            
            
            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">find</strong> <span class="badge bg-danger">Required</span> – Specifies the value to find
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">replace</strong> <span class="badge bg-danger">Required</span> –  Specifies the value to replace the value in find
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> –Specifies the string to be searched
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-secondary">Optional</span> – A variable that counts the number of replacements
                        </li>
                    </ul>
                </div>
            </div>

<!-- Include FontAwesome for icons -->
<script src="https://kit.fontawesome.com/YOUR_FA_KIT.js" crossorigin="anonymous"></script>


            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$subjectVal  = "It was nice meeting you. May you shine brightly."
echo str_replace('you', 'him', $subjectVal)
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                  $subjectVal  = "It was nice meeting you. May you shine brightly."
                   
                
            ?>
            <div class="output-box"><?php echo str_replace('you', 'him', $subjectVal);  ?></div>
        </div>
    </div>
</div>
</main>
</body>
</html>
