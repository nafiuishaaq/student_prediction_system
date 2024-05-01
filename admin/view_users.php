<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
    header('location: login.php');
}
include ('include/db.php') ?>

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
                        <div class="card-header">
                            <h4 class="card-title text-center">VIEW USERS</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="#" method="post" class="form form-vertical">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12 col-md-8 m-auto">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search User..." name="Subject">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-book"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="submit" name="Search" class="btn btn-primary me-1 mb-1">
                                                    <i class="bi bi-search"></i> Seacrh</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>


                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <?php

                                    $query = "SELECT * FROM users";
                                    $run_query = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($run_query) > 0) {
                                        ?>

                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>EDIT</th>
                                                <th>DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                                while ($row = mysqli_fetch_assoc($run_query)) {

                                                    ?>
                                            <tr>
                                                <td class="text-bold-500"><?php echo $row['name']; ?> </td>
                                                <td><?php echo $row['email']; ?> </td>

                                                <td><button class="btn btn-success btn-sm"> <i class="bi bi-pen"></i>
                                                    </button></td>
                                                <form action="code.php" method="post">
                                                    <td class="text-bold-500">
                                                        <input type="hidden" name="delete_id"
                                                            value="<?php echo $row['user_id']; ?>">
                                                        <button name="del_user" class="btn btn-danger btn-sm"> <i
                                                                class="bi bi-trash"></i> </button>
                                                    </td>
                                                </form>
                                            </tr>
                                            <?php
                                                }

                                    }
                                    ?>
                                        </tbody>
                                    </table>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- 
            <footer>
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