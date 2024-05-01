<?php
session_start();
include('include/db.php');


if(isset($_POST['sign_up']))
{

    $user_email = mysqli_real_escape_string($conn,$_POST['email']);
    $user_name = mysqli_real_escape_string($conn,$_POST['name']);
    $user_pass = md5($_POST['pass']);
    $user_rpass = md5($_POST['r_pass']);

    if($user_pass == $user_rpass)
        {
                    $query = "INSERT INTO `users`(`user_id`,`email`,`name`,`pass`,`rpass`) VALUES('','$user_email','$user_name','$user_pass','$user_rpass')";

                    $query_run = mysqli_query($conn,$query);

                    if($query_run){
                        echo $_SESSION['success'] = '<div class="alert alert-success">Your data is updated successfully!</div>';
                        header('location: login.php');
                    }else{
                         echo $_SESSION['status'] = '<div class="alert alert-danger">Something is wrong please try agian later!</div>';
                        header('location: login.php');
                    }
         }else{
            echo $_SESSION['status'] = '<div class="alert alert-danger text-center">Password do not match!</div>';
                        header('location: register.php');
        }            

}

if(isset($_POST['updateProfile'])){
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    $query = "UPDATE users  SET email ='$email', name = '$name' WHERE user_id = '$id'";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo $_SESSION['success'] = '<div class="alert alert-success">Your data is updated successfully!</div>';
        header('location: profile.php');
    }else{
         echo $_SESSION['status'] = '<div class="alert alert-danger">Something is wrong please try agian later!</div>';
        header('location: profile.php');
    }

}

if(isset($_POST['updatePass'])){
    $id = $_POST['id'];
    $pass = md5($_POST['pass']);
    $rpass = md5($_POST['rpass']);
        
    if($pass == $rpass){
        $query = "UPDATE users SET pass ='$pass', rpass = '$rpass' WHERE user_id = '$id'";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            echo $_SESSION['success'] = '<div class="alert alert-success">Your password is updated successfully!</div>';
            header('location: profile.php');
        }else{
            echo $_SESSION['status'] = '<div class="alert alert-danger">Something is wrong please try agian later!</div>';
            header('location: profile.php');
        }
        }else{
                echo $_SESSION['status'] = '<div class="alert alert-danger">Password do not Match!</div>';
            header('location: profile.php');

        }
    
    }
// if(isset($_POST['submit_feed'])){
//     $u_id = $_POST['id'];
//     $u_email = mysql_real_escape_string($_POST['user_email']);
//     $u_feed = mysql_real_escape_string($_POST['user_feedback']);

//     $query = "INSERT INTO `feeedback`(`feed_id`,`user_id`,`u_email`,`u_feed`) VALUES (feed_id= '', user_id ='$u_id',u_email ='$u_email', u_feed ='$u_feed')";
//     $query_run = mysql_query($query);

//         if($query_run){
//             echo $_SESSION['success'] = '<div class="alert alert-success">Your Feedback is Sent successfully!</div>';
//             header('location: feedback.php');
//         }else{
//              echo $_SESSION['status'] = '<div class="alert alert-danger">Something is wrong please try agian later!</div>';
//             header('location: feedback.php');

//     }
// }


?>