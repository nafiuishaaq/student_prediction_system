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
    <title>Prediction</title>

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

            <div class="page-heading">
                <!-- <h3 class="text-center" style="font-size:20px; font-family:Futura Md BT;">WELCOME TO KUST COURSES PREDICTION SYSTEM</h3> -->
                <h3 class="text-center text-info" style="font-family:Futura Md BT;">Do you want to
                    predict today?</h3>
                <p class="text-center" style="font-size:20px; font-family:Futura Md BT;">Well, Students prediction
                    System is a system designed to help the student to have idea or check the availability of courses
                    that map their combination from jamb and the cut-off marks that certisfy the requirement alloted to
                    the courses. This is in other to clarify the issues of having misinterpretation of subjects
                    combination and cutoff marks. <br><br><i>--BEST OF LUCK--</i></p>
            </div>

            <div class="page-content">

                <!-- <p>TO PREDICTS YOUR COURSES MAKE SURE YOU UPDATE YOUR:</p>
            
                    <ul>
                        
                        <li>
                            <a href="#"> PROFILE <i class="bi bi-arrow-left"></i></a>
                        </li>

                        <li>
                            <a href="#">SUBECTS / SCORES <i class="bi bi-arrow-left"></i></a>
                        </li>

                    </ul> -->

                <a href="predict.php" class="btn btn-success d-block my-3"><i class="bi bi-search"> </i>CLICK TO
                    PREDICT</a>


                <!-- code goes here -->




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