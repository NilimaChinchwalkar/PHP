
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>substr()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>substr()</code> function returns a part of a string.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">substr(string,start,length)</div>            
            
            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> – Specifies the string to return a part of
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">start</strong> <span class="badge bg-danger">Required</span> – Specifies where to start in the string
                            <ul class="mt-1">
                                <li><code>A positive number </code> – Start at a specified position in the string</li>
                                <li><code>A negative number </code> – Start at a specified position from the end of the string</li>
                                <li><code>0 </code> – Start at the first character in string</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">length</strong> <span class="badge bg-secondary">Optional</span> – Specifies the length of the returned string.
                            <ul class="mt-1">
                                <li><code>A positive number </code> –  The length to be returned from the start parameter</li>
                                <li><code>A negative number </code> – The length to be returned from the end of the string</li>
                                <li><code>0, NULL, or FALSE  </code> – it return an empty string</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <h5 class="text-success mt-4">📝 Example Code:</h5>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
$string = "I love php, I love php too!"; 

echo substr($string,10);
echo substr($string,1);
echo substr($string,-1);
echo substr($string,0,10);
echo substr($string,-10,-2);
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $string = "I love php, I love php too!"; 
            ?>
            <div class="output-box">
                <?php
                    echo substr($string,10)."<br>";
                    echo substr($string,1)."<br>";
                    echo substr($string,-1)."<br>";
                    echo substr($string,0,10)."<br>";
                    echo substr($string,-10,-2)."<br>"; 

                   
                   
                ?>
            </div>

        </div>  
    </div>
</div>
</main>

</body>
</html>
