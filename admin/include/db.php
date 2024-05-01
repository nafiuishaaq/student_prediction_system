<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'course_prediction_system';

$conn = mysqli_connect($host, $user, $pass, $database);

if(!$conn){
    die("Subhanallah!!! The DataBase Connection Failed!");
}
 else{
    mysqli_select_db($conn, $database);
 }
?>