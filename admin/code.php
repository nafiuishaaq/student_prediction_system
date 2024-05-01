<?php
session_start();
include ('include/db.php');

if (isset($_POST['Save_Subject'])) {

   $subject = $_POST['Subject'];

   // $check = "SELECT * FROM subject";
   // $run = mysqli_connect($conn,$check);
   // $q = mysqli_fetch_assoc($run);

   // if($q == $subject){

   $query = "INSERT INTO `subject` (`Subject_Title`) VALUES('$subject')";

   if (mysqli_query($conn, $query)) {
      echo $_SESSION['success'] = '<div class="alert alert-success">You added ' . $subject . ' successfully!</div>';
      header('location: add_subject.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Sorry, please try again later!</div>';
      header('location: add_subject.php');
   }

   // }else{
   //    echo $_SESSION['success'] = '<div class="alert alert-danger">Sorry, the Subject alraedy exist.</div>';
   //       header('location: add_subject.php');
   // }

}

if (isset($_POST['Save_Year'])) {

   $year = $_POST['Year'];

   // $check2 = "SELECT * FROM year";
   // $run2 = mysqli_query($conn, $check2);
   // $q2 = mysqli_fetch_assoc($run2);

   // if ($q2 == $year) {

   $query = "INSERT INTO year(Year) VALUES($year)";


   if (mysqli_query($conn, $query)) {
      echo $_SESSION['success'] = '<div class="alert alert-success">You added year ' . $year . ' Session successfully!</div>';
      header('location: add_year.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Sorry, please try again later!</div>';
      header('location: add_year.php');
   }
   // } else {
   //    echo $_SESSION['success'] = '<div class="alert alert-danger">Sorry, the Session already exist.</div>';
   //    header('location: add_year.php');
   // }
}

if (isset($_POST['add_course'])) {

   $title = $_POST['title'];
   $cutoff = $_POST['cutoff'];
   $first = $_POST['first'];
   $second = $_POST['second'];
   $third = $_POST['third'];
   $fourth = $_POST['fourth'];
   $fifth = $_POST['fifth'];
   $year = $_POST['year'];

   // $check3 = "SELECT * FROM course";
   // $run3 = mysqli_query($conn, $check3);
   // $q3 = mysqli_fetch_assoc($run3);

   // if ($q3 == $title) {

   $query = "INSERT INTO `course`(`C_ID`, `CourseTitle`, `CutOff`, `FirstSubject`, `SecondSubject`, `ThirdSubject`, `FourthSubject`, `FifthSubject`, `Year`) VALUES ('','$title','$cutoff','$first','$second','$third','$fourth','$fifth','$year')";

   if (mysqli_query($conn, $query)) {
      echo $_SESSION['success'] = '<div class="alert alert-success">You added course successfully!</div>';
      header('location: add_course.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Sorry please try agian later!</div>';
      header('location: add_course.php');
   }
   // } else {
   //    echo $_SESSION['success'] = '<div class="alert alert-danger">Sorry, the Course "' . $title . '" already exist.</div>';
   //    header('location: add_course.php');
   // }
}

if (isset($_POST['del_course'])) {
   $id = $_POST['delete_id'];


   $query = "DELETE FROM course WHERE C_ID ='$id'";
   $query_run = mysqli_query($conn, $query);

   if ($query_run) {
      echo $_SESSION['success'] = '<div class="alert alert-success">Your course is deleted successfully!</div>';
      header('location: view_course.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Your course is not Deleted!</div>';
      header('location: view_course.php');
   }
}

if (isset($_POST['del_subject'])) {
   $id = $_POST['delete_id'];


   $query = "DELETE FROM subject WHERE Subject_ID ='$id'";
   $query_run = mysqli_query($conn, $query);

   if ($query_run) {
      echo $_SESSION['success'] = '<div class="alert alert-success">Your subject is deleted successfully!</div>';
      header('location: add_subject.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Your Subject is not Deleted!</div>';
      header('location: add_subject.php');
   }
}

if (isset($_POST['del_year'])) {
   $id = $_POST['delete_id'];


   $query = "DELETE FROM year WHERE Year_ID ='$id'";
   $query_run = mysqli_query($conn, $query);

   if ($query_run) {
      echo $_SESSION['success'] = '<div class="alert alert-success">Your Year is deleted successfully!</div>';
      header('location: add_year.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Your Year is not Deleted!</div>';
      header('location: add_year.php');
   }
}


if (isset($_POST['del_user'])) {
   $id = $_POST['delete_id'];


   $query = "DELETE FROM users WHERE user_id ='$id'";
   $query_run = mysqli_query($conn, $query);

   if ($query_run) {
      echo $_SESSION['success'] = '<div class="alert alert-success">Your user is deleted successfully!</div>';
      header('location: view_users.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Your user is not Deleted!</div>';
      header('location: view_users.php');
   }
}

if (isset($_POST['update_subject'])) {
   $edit_id = $_POST['edit_id'];
   $edit_subject = $_POST['Subject'];


   $query = "UPDATE `subject` SET `Subject_Title`= '$edit_subject' WHERE Subject_ID = '$edit_id'";
   $run_query = mysqli_connect($conn, $query);

   if ($run_query) {
      echo $_SESSION['success'] = '<div class="alert alert-success">You Updated successfully!</div>';
      header('location: add_subject.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Sorry, please try again later!</div>';
      header('location: add_subject.php');
   }
}

if (isset($_POST['update_year'])) {
   $edit_id = $_POST['edit_year'];
   $edit_year = $_POST['year'];

   $query = "UPDATE `year` SET `Year`= '$edit_year' WHERE Year_ID = '$edit_id'";
   $run_query = mysqli_connect($conn, $query);

   if ($run_query) {
      echo $_SESSION['success'] = '<div class="alert alert-success">You Updated successfully!</div>';
      header('location: add_year.php');
   } else {
      echo $_SESSION['status'] = '<div class="alert alert-danger">Sorry, please try again later!</div>';
      header('location: add_year.php');
   }
}