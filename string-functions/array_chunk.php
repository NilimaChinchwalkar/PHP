
<!-- Navbar -->
<?php include('navbar.php'); ?>

<!-- Sidebar -->
<?php include('sidebar.php'); ?>

<main class="content">

    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0">PHP <code>array_chunk()</code> Function</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">
                    The <code>array_chunk()</code> function split an array into parts or chunks of a given size.
                </p>

                <h5 class="text-success mt-3">🔹 Syntax:</h5>
                <div class="code-box">array_chunk(array, size, preserve_key)</div>            
                
                <h5 class="text-success mt-3">
                    <i class="fas fa-info-circle"></i> Parameters:
                </h5>

                <div class="card shadow-sm border-success mt-2">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong class="text-primary">array</strong> <span class="badge bg-danger">Required</span> – Specifies the array to use
                            </li>
                            <li class="list-group-item">
                                <strong class="text-primary">size</strong> <span class="badge bg-danger">Required</span> – An integer that specifies the size of each chunk
                            </li>
                            <li class="list-group-item">
                                <strong class="text-primary">preserve_key</strong> <span class="badge bg-secondary">Optional</span> –
                                <ul class="mt-1">
                                    <li><code>true  </code> – Preserves the keys</li>
                                    <li><code>false </code> – Default. Reindexes the chunk numerically</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <h5 class="text-success mt-4">📝 Example Code:</h5>
                <pre class="bg-dark text-light p-3 rounded">
    &lt;?php 
    $age=array('a', 'b', 'c', 'd', 'e');

    print_r(array_chunk($age,2,true));
    ?&gt;
                </pre>

                <h5 class="text-success mt-4">✅ Output:</h5>
                <?php 
                    $age=array('a', 'b', 'c', 'd', 'e');

                ?>
                <div class="output-box">
                    <?php
                        echo "<pre>"; print_r(array_chunk($age,2,true)); echo "</pre>";
                    ?>
                </div>

                <br>

                
                <pre class="bg-dark text-light p-3 rounded">
    &lt;?php 
    $age=array('a', 'b', 'c', 'd', 'e');

    print_r(array_chunk($age,2));
    ?&gt;
                </pre>

                <h5 class="text-success mt-4">✅ Output:</h5>
                <?php 
                    $age=array('a', 'b', 'c', 'd', 'e');

                ?>
                <div class="output-box">
                    <?php
                        echo "<pre>"; print_r(array_chunk($age,2)); echo "</pre>";
                    ?>
                </div>

            </div>  
        </div>
    </div>
</main>

</body>
</html>
