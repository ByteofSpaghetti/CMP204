<?php
session_start(); //session start

include 'includes/connectionString.php';//connects to database

if ($_SESSION['loggedin'] !== true) { //if global variable loggedin is not true, redirect to login page 
  header("Location: login.php"); // Redirect to login page if the user is not logged in
  exit(); //exit
}

  if ($_SERVER['REQUEST_METHOD'] === 'POST') { //if server request method is post, declare variable username from global Session variable, and get other variables from form to isnert into database
   $Username = $_SESSION['username']; 
   $eventname = mysqli_real_escape_string($conn, $_POST['eventName']);
   $eventtype = mysqli_real_escape_string($conn, $_POST['eventType']);
   $eventplace = mysqli_real_escape_string($conn, $_POST['eventPlace']);
   $eventDate = mysqli_real_escape_string($conn, $_POST['eventDate']);
  }

     $sql = "INSERT INTO events (Username, eventName, eventType, eventPlace, eventDate) VALUES (?, ?, ?, ?, ?)"; //creates a prepared statement for insertion

     $stmt = mysqli_prepare($conn, $sql); //prepares statement for execution
 
     mysqli_stmt_bind_param($stmt, 'sssss', $Username, $eventname, $eventtype, $eventplace, $eventDate); //binds parameters to statement
 
     
     if (mysqli_stmt_execute($stmt)) { //if execution is successful then redirect to userProfile.php
         header('Location: userProfile.php'); //redirection
         exit(); //exit
     } 
 
     // Close the statement
     mysqli_stmt_close($stmt);

    //SQL query to insert event to database

    //redirect user back to profile
    //header("Location: http://www.example.com/");

?>