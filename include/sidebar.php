<!-- side bar begins -->
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo"> 
                            <?php echo "<h4>Welcome, ".$_SESSION['name']."</h4>";?>
                            
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
                        <!-- <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-plus"></i>
                                <span>My Profile</span>
                            </a>
                        </li> -->

                        <!-- <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-plus"></i>
                                <span>Subects / Scores</span>
                            </a>
                        </li> -->

                        <li class="sidebar-item">
                            <a href="predict.php" class='sidebar-link'>
                                <i class="bi bi-star"></i>
                                <span>Predict</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-item">
                            <a href="feedback.php" class='sidebar-link'>
                                <i class="bi bi-envelope"></i>
                                <span>Feedback</span>
                            </a>
                        </li> -->
                        <hr>
                        <li class="sidebar-item">
                            <a href="documentation.pdf" download rel="noopener noreferrer" class='sidebar-link'>
                                <i class="bi bi-book"></i>
                               <span>User Guide</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="profile.php" class='sidebar-link'>
                                <i class="iconly-boldUser"></i>
                                <span>My profile</span>
                            </a>
                        </li>
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
        <!-- side bar ends -->