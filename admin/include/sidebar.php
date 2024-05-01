<!-- side bar begins -->
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                        <?php echo $_SESSION['admin_name'];?>
                            <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a> -->
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- <li class="sidebar-title">Menu</li> -->

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="add_course.php" class='sidebar-link'>
                                <i class="bi bi-plus"></i>
                                <span>Add Courses</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="view_course.php" class='sidebar-link'>
                                <i class="bi bi-eye"></i>
                                <span>View / Edit Courses</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="add_subject.php" class='sidebar-link'>
                                <i class="bi bi-plus"></i>
                                <span>Add Subjects</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="add_year.php" class='sidebar-link'>
                                <i class="bi bi-plus"></i>
                                <span>Add Year</span>
                            </a>
                        </li>
                        
                        
                        <li class="sidebar-item">
                            <a href="view_users.php" class='sidebar-link'>
                                <i class="bi bi-eye"></i>
                                <span>View Users</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-eye"></i>
                                <span>View Feedbacks</span>
                            </a>
                        </li> -->
                        <hr>
                        <li class="sidebar-item">
                            <a href="./logout.php" class='sidebar-link'>
                                <i class="bi bi-arrow-left"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <!-- side bar begins -->