<div class="horizontal-nav">
    <nav class="home-content">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/../resource/bootstrap.bundle.min.js"></script>


        <div class="logo-container">
            <i class='bx bx-menu'></i>
        </div>
        <?php if (!isset($_SESSION['user']) ?? false) : ?>
            <div class="nav-links">
                <a href="/" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Home</a>
                <a href="/about" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/about' ? 'active' : '' ?>">About</a>
                <a href="/contact" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/contact' ? 'active' : '' ?>">Contact Us</a>
            </div>



            <a href="/login" class="nav-login-btn">Login</a>
        <?php endif ?>
        <?php if (isset($_SESSION['user']['user_type'])) : ?>
            <?php if ($_SESSION['user']['user_type'] === 'admin' ?? false) : ?>
                <div class="nav-links">
                    <a href="/admin/dashboard" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/admin/dashboard' ? 'active' : '' ?>">Home</a>
                    <div class="dropdown">
                        <a href=" ### " class="nav-link dropdown-toggle <?= ($_SERVER['REQUEST_URI'] === '/admin/teachers/create' || $_SERVER['REQUEST_URI'] === '/admin/teachers/show') ? 'active' : '' ?>" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">Facilitators</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdownMenu">
                            <a href="/admin/teachers/create" class="nav-link ">Add Facilitators</a>
                            <a href="/admin/teachers/show" class="nav-link">View Facilitators</a>
                        </div>
                    </div>

                    <a href="/grades" class="nav-link">Grades</a>
                    <a href="/student" class="nav-link">Students</a>
                </div>
                <form action="/sessions" method="post">
                    <input type="hidden" value="DELETE" name="_method">
                    <button class="nav-login-btn">Logout</button>
                </form>
            <?php endif ?>
        <?php endif ?>
        <!-- <a href="/login" class="nav-login-btn">Logout</a> -->

        <script>
            function toggleDropdown() {
                var dropdownMenu = document.getElementById("dropdownMenu");

                // Toggle the display style between 'block' and 'none'
                if (dropdownMenu.style.display === "block") {
                    dropdownMenu.style.display = "none";
                } else {
                    dropdownMenu.style.display = "block";
                }
            }
        </script>


    </nav>
</div>

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>