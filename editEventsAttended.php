<?php

session_start(); //session starts

include 'includes/connectionString.php';//connects to database


if ($_SESSION['loggedin'] !== true) { //if global variable loggedin is not true, redirect to login page 
  header("Location: login.php"); // Redirect to login page if the user is not logged in
  exit(); //exit
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {//If server request method is post get vraibles from form and username from global session variable
  $Username =   $_SESSION['username'];
  $eventname = mysqli_real_escape_string($conn, $_POST['eventname1']);
  $eventnameUpdate = mysqli_real_escape_string($conn, $_POST['eventname-update']);//ID?
  $eventtypeUpdate = mysqli_real_escape_string($conn, $_POST['eventtype-update']);
  $eventplaceUpdate = mysqli_real_escape_string($conn, $_POST['position-update']);
  $eventDateUpdate = mysqli_real_escape_string($conn, $_POST['Date-update']);
  }

  $sql = "UPDATE events SET eventName = ?, eventType = ?, eventPlace = ?, eventDate = ? WHERE Username = ? AND eventName = ?"; //creates statememnt for exeuction
  $stmt = mysqli_prepare($conn, $sql);//prepares statement using conn and sql variable
  mysqli_stmt_bind_param($stmt, 'ssssss', $eventnameUpdate, $eventtypeUpdate, $eventplaceUpdate, $eventDateUpdate, $Username, $eventname); //binds variables to statement

  if (mysqli_stmt_execute($stmt)) {//if execution is successful, redirect to userProfile.php
    header('Location: userProfile.php');//header redirection
    exit(); //exit
} 

mysqli_stmt_close($stmt);//close the statement variable




    //SQL query to update event in database

    //redirect user back to profile
    //header("Location: http://www.example.com/");

?>