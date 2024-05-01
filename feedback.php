<?php 
session_start();
$su_name = $_SESSION['user_id'];
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
include('include/db.php') ?>

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
        

    <?php include('include/sidebar.php'); ?>


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
                 
                 if(isset($_SESSION['success']) && $_SESSION['success']  !='')
                 {
                   echo $_SESSION['success'];
                   unset($_SESSION['success']);
                 }
           
                   if(isset($_SESSION['status']) && $_SESSION['status']  !='')
                 {
                   echo $_SESSION['status'];
                   unset($_SESSION['status']);
                 }
                 ?>
                        <div class="card shadow"> <!-- card shadow begn -->
                                <div class="card-header"> <!-- card-header begn -->
                                <!-- Page Heading -->
                            <h1 class="h4 text-gray-800">FEEDBACK</h1>
                                </div> <!-- card-header finish -->
                                <div class="card-body"> <!-- card-body begn -->

                                  
                <form action="code.php" method="post">
                            <?php
                                $query ="Select * from users where user_id = '$su_name' ";
                                $run_query = mysql_query($query);

                                if(mysql_num_rows($run_query) > 0){

                            ?>
                    <div class="form-group">
                                      
                               
                    <Select name="user_email" class="form-control">
                    <?php

                            while($row = mysql_fetch_assoc($run_query)){
                            ?>

                    <option value="<?php echo $row['user_id']; ?>"><?php echo $row['email'] ?></option>
                    <?php
                                }
                                }
                                ?>
                    </Select>
                    </div>
                    
                    <div class="form-group">
                <label for="comment">State Your FeedBack Here:</label>
                <textarea name="user_feedback" class="form-control" rows="5" id="comment"></textarea>
                </div>

                    
                    <input type="hidden" name="id" value="<?php echo $su_name;?>">
                    <button name="submit_feed" type="submit" class="btn btn-primary float-right my-3 btn-block">POST</button>

                </form>

      </div><!-- card-body finish -->
        </div> <!-- card shadow finish -->
                        </div>
                    </div>
                </div>  
            </div>




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
            </footer>
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

