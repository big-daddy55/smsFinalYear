<div class="sidebar close">
    <div class="logo-details">
        <img src="/../resource/logo.png" alt="" id="logo-icon">
        <!-- <i class='bx bxl-c-plus-plus'></i> -->
        <span class="logo_name">LMIS</span>
    </div>
    <?php if ($_SESSION['user']['user_type'] === 'admin' ?? false) : ?>
        <ul class="side-nav-links">
            <li class="<?= $_SERVER['REQUEST_URI'] === '/admin/dashboard' ? 'active' : '' ?>">
                <a href="/admin/dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank ">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li class="<?= ($_SERVER['REQUEST_URI'] === '/admin/teachers/create' || $_SERVER['REQUEST_URI'] === '/admin/teachers/show') ? 'active' : '' ?>">
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Facilitators</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Facilitators</a></li>
                    <li><a href="/admin/teachers/create">Add Facilitator</a></li>
                    <li><a href="/admin/teachers/show">View Facilitators</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Students</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Students</a></li>
                    <li><a href="/admin/students/create">Add Student</a></li>
                    <li><a href="/admin/students/show">View Students</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Grades</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu"> 
                    <li><a class="link_name" href="#">Grades</a></li>
                    <li><a href="/admin/grades/show">All Grades</a></li>
                    <?php foreach($grades as $grade): ?>
                    <li><a href="/admin/grades/"><?=$grade['grade_name']?></a></li>

                    <?php endforeach ?>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Analytics</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Chart</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chart</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-plug'></i>
                        <span class="link_name">Plugins</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Plugins</a></li>
                    <li><a href="#">UI Face</a></li>
                    <li><a href="#">Pigments</a></li>
                    <li><a href="#">Box Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explore</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-history'></i>
                    <span class="link_name">History</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">History</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="/../resource/profile.jpg" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name"><?= $name ?></div>
                        <div class="job"><?= $user_type ?></div>
                    </div>
                    <form action="/sessions" method="post">
                        <input type="hidden" value="DELETE" name="_method">
                        <button class="logout-btn-side-nav"><i class='bx bx-log-out'></i></button>
                    </form>
                </div>
            </li>
        </ul>
    <?php endif ?>
</div>
<!-- <section class="home-section">
    <div class="home-content">
        
        <span class="text">Drop Down Sidebar</span>
    </div>
</section> -->