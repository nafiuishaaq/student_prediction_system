<?php 
session_start();
if(!isset($_SESSION['admin_email'])){
    header('location: login.php');
}
include('include/db.php') 
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

                
                    <?php 
                    if(isset($_POST['edit_subject']))
                    $edit_id = $_POST['edit_subject_id'];

                    $query = "SELECT * FROM subject WHERE Subject_ID = '$edit_id'";
                    $query_run = mysql_query($query);

                    if(mysql_num_rows($query_run) > 0 ){
                        ?>
                      
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">EDIT SUBJECT FORM</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="code.php" method="post" class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-8 m-auto">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Edit Subject</label>
                                                            <div class="position-relative">
                                                         

                                                                            <?php

                                                                            while($row = mysql_fetch_assoc($query_run)){
                                                                                ?>
                                                                        <input type="text" class="form-control"
                                                                    name="Subject" value="<?php echo $row['Subject_Title']?>" name="subject">
                                                                    <?php
                                                                            }
                                                                        }
                                                                        
                                                                        ?>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-book"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    <div class="col-12 d-flex justify-content-center">
                                                    <input type="hidden" name="edit_id" value="<?php echo  $edit_id ?> ">
                                                        <button type="submit" name="update_subject"
                                                            class="btn btn-primary me-1 mb-1"> <i class="bi bi-arrow-down"></i> Update </button>
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

