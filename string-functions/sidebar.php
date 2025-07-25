<!-- Load Bootstrap & FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Sidebar Toggle Button (for mobile) -->
<button class="btn btn-primary d-md-none mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
    <i class="fas fa-bars"></i> Menu
</button>

<!-- Sidebar -->
<aside class="sidebar collapse d-md-block bg-light border rounded shadow-sm p-3" id="sidebarMenu">
    <ul class="list-group">
        <!-- Intro Link -->
        <li class="list-group-item">
            <a href="index.php" class="text-decoration-none text-dark">
                <i class="fas fa-info-circle"></i> Intro
            </a>
        </li>

        <!-- Collapsible String Functions Section -->
        <li class="list-group-item">
            <strong><i class="fas fa-code"></i> String Functions</strong>
            <button class="btn btn-sm float-end text-primary toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#stringFunctionsList" aria-expanded="false">
                <i class="fas fa-chevron-up"></i>
            </button>
            <ul class="list-unstyled ms-3 mt-2 collapse" id="stringFunctionsList">
                <li><a href="strlen.php" class="text-decoration-none text-dark"> strlen()</a></li>
                <li><a href="str_word_count.php" class="text-decoration-none text-dark"> str_word_count()</a></li>
                <li><a href="strrev.php" class="text-decoration-none text-dark"> strrev()</a></li>
                <li><a href="strtoupper.php" class="text-decoration-none text-dark"> strtoupper()</a></li>
                <li><a href="strstr.php" class="text-decoration-none text-dark"> strstr()</a></li>
                <li><a href="stristr.php" class="text-decoration-none text-dark"> stristr()</a></li>
                <li><a href="explode.php" class="text-decoration-none text-dark"> explode()</a></li>
                <li><a href="str_pad.php" class="text-decoration-none text-dark"> str_pad()</a></li>
                <li><a href="str_repeat.php" class="text-decoration-none text-dark"> str_repeat()</a></li>
                <li><a href="str_replace.php" class="text-decoration-none text-dark"> str_replace()</a></li>
                <li><a href="str_split.php" class="text-decoration-none text-dark"> str_split()</a></li>
                <li><a href="strchr.php" class="text-decoration-none text-dark"> strchr()</a></li>
                <li><a href="stripos.php" class="text-decoration-none text-dark"> stripos()</a></li>
                <li><a href="strpos.php" class="text-decoration-none text-dark"> strpos()</a></li>
                <li><a href="substr.php" class="text-decoration-none text-dark"> substr()</a></li>
                <li><a href="checkPalindrome.php" class="text-decoration-none text-dark"> checkPalindrome()</a></li>
                <li><a href="charCountInString.php" class="text-decoration-none text-dark"> charCountInString()</a></li>
                <li><a href="reverseString.php" class="text-decoration-none text-dark"> reverseString()</a></li>
            </ul>
        </li>

        <!-- Collapsible Array Functions Section -->
        <li class="list-group-item">
            <strong><i class="fas fa-code"></i> Array Functions</strong>
            <button class="btn btn-sm float-end text-primary toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#arrayFunctionsList" aria-expanded="false">
                <i class="fas fa-chevron-up"></i>
            </button>
            <ul class="list-unstyled ms-3 mt-2 collapse show" id="arrayFunctionsList">
                <li><a href="array_chunk.php" class="text-decoration-none text-dark"> array_chunk() </a></li>
            </ul>
        </li>


    </ul>
</aside>

<!-- JavaScript to Toggle Icons -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.querySelector(".toggle-btn");
        const collapseElement = document.querySelector("#stringFunctionsList");
        const icon = toggleBtn.querySelector("i");

        // Listen to Bootstrap collapse events
        collapseElement.addEventListener("show.bs.collapse", function () {
            icon.classList.remove("fa-chevron-down");
            icon.classList.add("fa-chevron-up");
        });

        collapseElement.addEventListener("hide.bs.collapse", function () {
            icon.classList.remove("fa-chevron-up");
            icon.classList.add("fa-chevron-down");
        });
    });
</script>
