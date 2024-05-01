<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');

}
$id = $_SESSION['user_id'];
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
                    <?php

                    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    }

                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card">
                        <div class="card-header text-center">
                            UPDATE PROFILE
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <?php

                                $query = "SELECT * FROM users WHERE user_id = '$id'";
                                $query_run = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($query_run)) {

                                    ?>

                                <form action="code.php" method="POST">
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" name="email" class="form-control"
                                            value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="<?php echo $row['name']; ?>">
                                        <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                                    </div>

                                    <button style="width:100%;" type="submit" name="updateProfile"
                                        class="btn btn-success">Update</button>
                                </form>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            UPDATE PASSWORD
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="code.php" method="POST">
                                    <div class="form-group">
                                        <label for="pwd">New Password</label>
                                        <input type="password" name="pass" class="form-control" id="pwd" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Repeat Password</label>
                                        <input type="password" name="rpass" class="form-control" id="pwd" required>
                                        <input type="hidden" name="id" value="<?php echo $id ?>">

                                    </div>

                                    <button style="width:100%;" type="submit" name="updatePass"
                                        class="btn btn-success ">Update</button>
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