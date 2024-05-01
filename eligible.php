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


            <div class="page-content" id="prnt">


                <?php

                if (isset($_POST['predicts'])) {

                    $firstSubject = 1;
                    $secondSubject = $_POST['second'];
                    $thirdSubject = $_POST['third'];
                    $fourthSubject = $_POST['fourth'];
                    $cutoffSubject = $_POST['cutoff'];
                    $yearSubject = $_POST['year'];


                    // (CourseTitle,Cutoff,FirstSubject,SecondSubject,Thirdubject,FourthSubject,FifthSubject,Year) 
                
                    $query = "SELECT * FROM course WHERE FirstSubject = 1 AND (SecondSubject = '$secondSubject' OR SecondSubject = '$thirdSubject' OR SecondSubject = '$fourthSubject') AND (ThirdSubject = '$secondSubject' OR ThirdSubject = '$thirdSubject' OR ThirdSubject = '$fourthSubject') AND (CutOff <= '$cutoffSubject') AND (Year = '$yearSubject')";


                    $query_run = mysqli_query($conn, $query);


                    if (mysqli_num_rows($query_run) > 0) {

                        $row3 = mysqli_num_rows($query_run);



                        ?>
                        <!--  Inverse table start -->
                        <section class="section">
                            <div class="row" id="table-inverse">
                                <div class="col-12">

                                    <div class="alert alert-success text-center m-3">Congratulations! Your Search Returns
                                        <strong class="text-white">(<?php echo $row3 ?>)</strong> Courses that you are
                                        eligible
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <!-- <h4 class="card-title">ELIGIBLE COURSES</h4> -->
                                        </div>

                                        <div class="card-content">
                                            <!-- <p class="m-3 text-info">You are seeing this courses because you have a combination of SUBJECT1, SUBJECT2, SUBJECT3 AND SUBJECT4 WITH CUT-OFF >= 200.</p> -->


                                            <!-- table with dark -->
                                            <div class="table-responsive">

                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>COURSE TITLE</th>
                                                            <th>CUT-OFF</th>
                                                            <th>DESCRIPTIONxamppxa</th>
                                                            <!-- <th>VIEW</th> -->
                                                            <th><a class="btn btn-success" onclick="printSection()"> <i
                                                                        class="bi bi-printer"></i></a></td>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $counter = 0;
                                                        while ($row = mysqli_fetch_assoc($query_run)) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo ++$counter ?></td>
                                                                <td class="text-bold-500"><?php echo $row['CourseTitle']; ?></td>
                                                                <td><?php echo $row['CutOff']; ?></td>
                                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                                                <td><button class="btn btn-primary"> <i
                                                                            class="bi bi-eye"></i></button></td>
                                                            </tr>

                                                            <!-- <tr>
                                                    <td class="text-bold-500">STATISTICS</td>
                                                    <td>250</td>
                                                    <td class="text-bold-500">2020/21</td>
                                                    <td>Its a very NICE course</td>
                                                    <td><button class="btn btn-primary"> <i class="bi bi-eye"></i></button></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-bold-500">MATHEMATICS</td>
                                                    <td>250</td>
                                                    <td class="text-bold-500">2020/21</td>
                                                    <td>Its a very COOL course</td>
                                                    <td><button class="btn btn-primary"> <i class="bi bi-eye"></i></button></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-bold-500">BIOLOGY</td>
                                                    <td>250</td>
                                                    <td class="text-bold-500">2020/21</td>
                                                    <td>Its a very DIFFERENT course</td>
                                                    <td><button class="btn btn-primary"> <i class="bi bi-eye"></i></button></td>
                                                </tr> -->
                                                            <?php
                                                        }
                    } else {
                        echo "<div class='alert alert-info display-5 text-center'> Sorry, No Result Found! <br>
                                            <i class='bi bi-emoji-frown'></i>
                                            </div>
                                            <a href='predict.php' class='btn btn-primary'><i class='bi bi-arrow-left '></i> GO BACK</a>
                                            ";
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
                </section>



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

        <script>
            function printSection(strid) {
                var printContent = document.getElementById('prnt');
                var WinPrint = window.open('', '', '');
                WinPrint.document.write(printContent.innerHTML);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();
            }
        </script>
</body>

</html>