
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>

    <main class="content">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">PHP <code>str_word_count()</code> Function</h3>
        </div>
        <div class="card-body">
            <p class="text-muted">
                The <code>str_word_count()</code> function in PHP is used to count the number of words in a string. It can also return an array containing the words or an associative array with word positions.
            </p>

            <h5 class="text-success mt-3">🔹 Syntax:</h5>
            <div class="code-box">str_word_count( $string,  $returnVal,  $characters)</div>


            <h5 class="text-success mt-3">
                <i class="fas fa-info-circle"></i> Parameters:
            </h5>

            <div class="card shadow-sm border-success mt-2">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong class="text-primary">string</strong> <span class="badge bg-danger">Required</span> – The input string to count words from.
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">returnVal</strong> <span class="badge bg-secondary">Optional</span> – Specifies the string to use for padding (default is whitespace).
                        </li>
                        <li class="list-group-item">
                            <strong class="text-primary">pad_type</strong> <span class="badge bg-secondary">Optional</span> – Specifies what side to pad the string:
                            <ul class="mt-1">
                                <li><code>0</code> – Returns the number of words.</li>
                                <li><code>1</code> – Returns an array of words.</li>
                                <li><code>2</code> – Returns an associative array where keys are word positions in the string.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <h5 class="text-success mt-4">📝 Example :</h5>
            <h6>1. Count the number of words in a string</h6>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
    $text = "Hello, welcome to PHP!";
    echo str_word_count($text); 
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $text = "Hello, welcome to PHP!";                
            ?>
            <div class="output-box"><?php echo str_word_count($text);  ?></div>
            <br>
            <h6>2. Get an array of words</h6>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
    $text = "Hello, welcome to PHP!";
    print_r(str_word_count($text, 1));
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $text = "Hello, welcome to PHP!";
            ?>
            <div class="output-box"><?php print_r(str_word_count($text, 1));    ?></div>

            <br>
            <h6>3. Get an associative array with word positions</h6>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
    $text = "Hello, welcome to PHP!";
    print_r(str_word_count($text, 2));
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
                $text = "Hello, welcome to PHP!";
            ?>
            <div class="output-box"><?php print_r(str_word_count($text, 2));    ?></div>

<br>
<h6>

            <br>
            <h6>

            <br>
            <h6>4. Allow special characters in words</h6>
            <pre class="bg-dark text-light p-3 rounded">
&lt;?php 
    $text = "Café and résumé are common words.";
    print_r(str_word_count($text, 1, "é"));
?&gt;
            </pre>

            <h5 class="text-success mt-4">✅ Output:</h5>
            <?php 
               $text = "Café and résumé are common words.";
            ?>
            <div class="output-box"><?php print_r(str_word_count($text, 1, "é"));    ?></div>

            
        <h5 class="text-success mt-3">🔹 Use Cases:</h5>
            <div class="code-box">
                <strong>Counting words in user input or articles.</strong> <br>
                <strong>Extracting words from a sentence for text processing.</strong> <br>
                <strong>Finding word positions for text analysis.</strong> 
            </div>
        </div>

    </div>
</div>
</main>

</body>
</html>
