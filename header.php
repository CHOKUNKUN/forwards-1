<header class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../1page/index.php">
            <img src="../image/3.png" alt="" height="70" class="d-inline-block align-text-middle">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php if (isset($_SESSION['user_id'])) { ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ข้อมูลผู้ใช้งาน
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../1page/profile.php">ข้อมูลส่วนตัว</a></li>
                                <li><a class="dropdown-item" href="../1page/change_pass.php">แก้ไขรหัสผ่าน</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                โพสต์การบริจาค
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../1page/post.php">บุคคลประสงค์ส่งต่อ</a></li>
                                <li><a class="dropdown-item" href="../1page/post.php">โครงการส่งต่อ</a></li>
                                <li><a class="dropdown-item" href="../1page/post.php">ขอรับบริจาค</a></li>
                                <li><a class="dropdown-item" href="../1page/post.php">ประชาสัมพันธ์</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                บัญชีองค์กร
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../1page/org_login.php">เข้าสู่ระบบองค์กร</a></li>
                                <li><a class="dropdown-item" href="../1page/org_register.php">สมัครบัญชีองค์กร</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="../1page/forwards.php" role="button" aria-expanded="false">
                                ส่งต่อ
                            </a>
                        </li>

                    </ul>
                <?php } else { ?>
                    <span class="navbar-text">
                        ยินดีต้อนรับเข้าสู่ "ส่งต่อ" กรุณาสมัครสมาชิกเพื่อเข้าสู่ระบบต่อไป
                    </span>

                <?php } ?>


                <div class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <nav class="navbar">
                            <img src="./assets/logo.png" class="navbar-logo" alt="logo" />
                            <ul class="navbar-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Playlists</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">About</a></li>
                            </ul>

                            <div class="profile-dropdown">
                                <div onclick="toggle()" class="profile-dropdown-btn">
                                    <div class="profile-img">
                                        <i class="fa-solid fa-circle"></i>
                                    </div>

                                    <span>Victoria
                                        <i class="fa-solid fa-angle-down"></i>
                                    </span>
                                </div>

                                <ul class="profile-dropdown-list">
                                    <li class="profile-dropdown-list-item">
                                        <a href="#">
                                            <i class="fa-regular fa-user"></i>
                                            Edit Profile
                                        </a>
                                    </li>

                                    <li class="profile-dropdown-list-item">
                                        <a href="#">
                                            <i class="fa-regular fa-envelope"></i>
                                            Inbox
                                        </a>
                                    </li>

                                    <li class="profile-dropdown-list-item">
                                        <a href="#">
                                            <i class="fa-solid fa-chart-line"></i>
                                            Analytics
                                        </a>
                                    </li>

                                    <li class="profile-dropdown-list-item">
                                        <a href="#">
                                            <i class="fa-solid fa-sliders"></i>
                                            Settings
                                        </a>
                                    </li>

                                    <li class="profile-dropdown-list-item">
                                        <a href="#">
                                            <i class="fa-regular fa-circle-question"></i>
                                            Help & Support
                                        </a>
                                    </li>
                                    <hr />

                                    <li class="profile-dropdown-list-item">
                                        <a href="#">
                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    <?php } else { ?>
                        <a href="../1page/login.php" class="btn btn-outline-primary rounded-pill" type="submit">เข้าสู่ระบบ</a>
                        &nbsp;
                        <a href="../1page/register.php" class="btn btn-outline-success rounded-pill" type="submit">สมัครสมาชิก</a>

                    <?php } ?>

                </div>
                </div>
        </div>
    </div>
</header>