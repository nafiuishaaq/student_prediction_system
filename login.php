<?php
include('admin/include/db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Users</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth" class="bg-dark">

        <div class="row h-100">
            <div class="col-lg-8 col-12 m-auto">
                <div id="auth-left">
                    <!-- <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div> -->
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
               

    if(isset($_POST['login'])){
                      $email = mysqli_real_escape_string($conn,$_POST['email']);
                      $password = md5($_POST['pass']);

                      $query = "select * from users where email = '".$email."' and pass = '".$password."'";
                      $query_run = mysqli_query($conn,$query);

                      $row = mysqli_fetch_array($query_run);

                      if(mysqli_num_rows($query_run) > 0){
                        session_start();
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['user_id'] = $row['user_id'];
                    

                        // echo '<div class="alert alert-success">welcome  ' .$row['firstname']. '</div>';
                        header('location: index.php');
                        }else{
                          echo '<div class="alert alert-danger text-center">Wrong Email or Password Combination</div>';
                        };
                    };
                   ?>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-3">Log in with your data that you entered during registration.</p>

                    <form action="login.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="email" class="form-control form-control-xl" placeholder="Username"required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="pass" class="form-control form-control-xl" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div> -->
                        <button name="login" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="register.php"
                                class="font-bold">Sign
                                up</a>.</p>
                        <!-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div> -->
        </div>

    </div>
</body>

</html>