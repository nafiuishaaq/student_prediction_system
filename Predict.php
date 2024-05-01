<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
include ('admin/include/db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">


        <?php include ('include/sidebar.php'); ?>



        <!-- Main Begin -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


            <div class="page-content">

                <div class="col-md-12 col-12">
                    <div class="card bg-primary">
                        <!-- <div class="card-header">
                                    
                                </div> -->
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="eligible.php" method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="card-title">
                                                <h4 class="card-title text-white">PREDICTS COURSE</h4>
                                            </div>
                                            <small class="text-white mb-3">Note: We provide English to you by default
                                                since it's compulsory, you only need to add any three combination form
                                                your jamb and your score along with the year.</small>
                                            <div class="col-6">
                                                <div class="form-group has-icon-left">
                                                    <label for="mobile-id-icon" class="text-white">1st Subject <span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <select name="first" class="form-select" disabled>

                                                            <option value="1">English</option>

                                                        </select>
                                                        <!-- <input type="text" class="form-control"
                                                                    placeholder="e.g English" id="mobile-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                            $query = "SELECT *  FROM subject WHERE Subject_ID != 1";
                                            $run_query = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($run_query) > 0) {
                                                ?>
                                                <div class="col-6">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon" class="text-white">2nd Subject </label>
                                                        <div class="position-relative">
                                                            <select name="second" class="form-select">
                                                                <option>Select...</option>
                                                                <?php

                                                                while ($row = mysqli_fetch_assoc($run_query)) {

                                                                    ?>
                                                                    <option value="<?php echo $row['Subject_ID']; ?> ">
                                                                        <?php echo $row['Subject_Title']; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                            }
                                            ?>
                                                        </select>
                                                        <!-- <input type="text" class="form-control"
                                                                    placeholder="e.g Math" id="mobile-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                            $query = "SELECT *  FROM subject WHERE Subject_ID != 1";
                                            $run_query = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($run_query) > 0) {
                                                ?>
                                                <div class="col-6">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon" class="text-white">3rd Subject</label>
                                                        <div class="position-relative">
                                                            <select name="third" class="form-select">
                                                                <option>Select...</option>
                                                                <?php

                                                                while ($row = mysqli_fetch_assoc($run_query)) {

                                                                    ?>
                                                                    <option value="<?php echo $row['Subject_ID']; ?> ">
                                                                        <?php echo $row['Subject_Title']; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                            }
                                            ?>
                                                        </select>
                                                        <!-- <input type="text" class="form-control"
                                                                    placeholder="e.g Physics" id="mobile-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <?php

                                            $query = "SELECT *  FROM subject WHERE Subject_ID != 1";
                                            $run_query = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($run_query) > 0) {
                                                ?>
                                                <div class="col-6">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon" class="text-white">Fourth
                                                            Subject</label>
                                                        <div class="position-relative">
                                                            <select name="fourth" class="form-select" id="fourth">
                                                                <option>Select...</option>
                                                                <?php

                                                                while ($row = mysqli_fetch_assoc($run_query)) {

                                                                    ?>
                                                                    <option value="<?php echo $row['Subject_ID']; ?> ">
                                                                        <?php echo $row['Subject_Title']; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                            }
                                            ?>
                                                        </select>
                                                        <!-- <input type="text" class="form-control"
                                                                placeholder="e.g Physics" id="mobile-id-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-phone"></i>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon" class="text-white">Jamb Cutoff</label>
                                                    <div class="position-relative">
                                                        <input type="number" class="form-control" placeholder="e.g 180"
                                                            name="cutoff" required>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php

                                            $query = "SELECT *  FROM year";
                                            $run_query = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($run_query) > 0) {
                                                ?>
                                                <div class="col-6">
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon" class="text-white">Year /
                                                            Session</label>
                                                        <div class="position-relative">
                                                            <select name="year" class="form-select">
                                                                <option>Select...</option>
                                                                <?php

                                                                while ($row = mysqli_fetch_assoc($run_query)) {

                                                                    ?>
                                                                    <option value="<?php echo $row['Year_ID']; ?> ">
                                                                        <?php echo $row['Year']; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                            }
                                            ?>
                                                        </select>
                                                        <!-- <input type="text" class="form-control"
                                                                    placeholder="e.g Chemistry" id="mobile-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success me-1 my-3"
                                                    name="predicts">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Software Engineering Assignment</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">Nafson-IG</a></p>
                    </div>
                </div>
            </footer> -->
    </div>
    <!-- Main Ends -->
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>