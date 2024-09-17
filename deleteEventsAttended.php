<?php

session_start(); //starts session

include 'includes/connectionString.php'; //connects to database


if ($_SESSION['loggedin'] !== true) {//if global session varaible logged in is not ture redirects user to login.php
  header("Location: login.php"); // Redirect to login page if the user is not logged in
  exit(); //exits
}


$sql = "DELETE FROM events WHERE Username = ? AND eventName = ?"; // prepares statement to delete from database 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //if server request method is post get username session variable and get eventname from form filled in
  $Username = $_SESSION['username'];//username session variable
  $eventname = mysqli_real_escape_string($conn, $_POST['eventname']);//eventname variable from form
  }
$stmt = mysqli_prepare($conn, $sql); //creates a prepared statement with sql and conn variable to prepare for connection

mysqli_stmt_bind_param($stmt, 'ss', $Username, $eventname); //binds parameters to statement

if (mysqli_stmt_execute($stmt)) { //if execution successful redirects to userProfile.php
    header('Location: userProfile.php'); //redirection
    exit();//exits 
} else {
  header('Location: userProfile.php'); //redirection
}

mysqli_stmt_close($stmt);//closes statement


    //SQL query to delete event from database

    //redirect user back to profile
    //header("Location: http://www.example.com/");

?>