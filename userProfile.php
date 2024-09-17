<?php

session_start(); //Session starts
include 'includes/connectionString.php';//connects to database
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) { //
    header("Location: login.php"); // Redirect to login page if the user is not logged in
    exit();//exits
}

$loggedInUsername = $_SESSION['username'];//get global variable session username 
$currentDate = date('Y-m-d'); // Get the current date in YYYY-MM-DD format
?>




<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="javascript/script.js"></script>
     <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Latest compiled Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<nav>
        <?php include_once "includes/links.php" ?>
    </nav>
    <div class="container-fluid"> 
<?php 
echo "<h1>Welcome to your profile $loggedInUsername</h1>";//displays username 

$sqlUpcoming = "SELECT eventName, eventType, eventPlace, eventDate FROM events WHERE Username = ? AND eventDate >= ?"; //creates vraible sqlUpcoming and creates statement to select events from database based on the current user and the eventDate being more than or equal to inserted variable
$stmtUpcoming = mysqli_prepare($conn, $sqlUpcoming);//prepares statement using conn and stmtupcoming variable

if ($stmtUpcoming) {//checks if stmtUpcoming holds a value
    mysqli_stmt_bind_param($stmtUpcoming, 'ss', $loggedInUsername, $currentDate);//binds varable to statement
    mysqli_stmt_execute($stmtUpcoming);//executes statement 
    $resultUpcoming = mysqli_stmt_get_result($stmtUpcoming);// sets resultUpcoming variable to result from mysqli_stmt_get_result funciton with stmtUpcoming as parameter

    if ($resultUpcoming && mysqli_num_rows($resultUpcoming) > 0) { //if resultUpCOming holds a value and value is more than 0 execute
        echo "<h2>Upcoming Events:</h2>"; //display UpcomingEvents
        echo "<ul>"; //echo list begin
        while ($row = mysqli_fetch_assoc($resultUpcoming)) { //while row equals arrow of upcoming events
            echo "<li>Event Name: " . $row['eventName'] . " | Event Type: " . $row['eventType'] . " | Position Placed: " . $row['eventPlace'] ." | Event Date: " . $row['eventDate'] . "</li>"; //display events with line as seperation under upcoming events
        }
        echo "</ul>";// echo end of list
    } else { // else output no upcoming events
        echo "<p>No upcoming events.</p>";
    }

    mysqli_stmt_close($stmtUpcoming);//close statement
} 

$sqlPrevious = "SELECT eventName, eventType, eventPlace, eventDate FROM events WHERE Username = ? AND eventDate < ?"; //creates statement called sqlPrevious and selects from events table where username is the logged in users and eventDate is less than CurrentDate
$stmtPrevious = mysqli_prepare($conn, $sqlPrevious); //prepares statement for execution using conn and sqlPrevious variable

if ($stmtPrevious) {//if stmtPrevious holds a value execute
    mysqli_stmt_bind_param($stmtPrevious, 'ss', $loggedInUsername, $currentDate); //binds parameters to prepared statement
    mysqli_stmt_execute($stmtPrevious); //execute statement
    $resultPrevious = mysqli_stmt_get_result($stmtPrevious); //set resultPrevious equal to the results from the code execution

    if ($resultPrevious && mysqli_num_rows($resultPrevious) > 0) {//if resultPrevious holds a value and it has more than 0 rows execute
        // Display previous events
        echo "<h2>Previous Events:</h2>"; //echo previous events 
        echo "<ul>";//echo beginning of list tag
        while ($row = mysqli_fetch_assoc($resultPrevious)) {//while row variable equals array of resultPrevious
            echo "<li>Event Name: " . $row['eventName'] . " | Event Type: " . $row['eventType'] . " | Position Placed: " . $row['eventPlace'] ." | Event Date: " . $row['eventDate'] . "</li>"; // outputs previous events detail seperated by vertical line
        }
        echo "</ul>";//echos end of list
    } else {//else echos no previous events
        echo "<p>No previous events.</p>";
    }

    mysqli_stmt_close($stmtPrevious);//closes statement
} 

mysqli_close($conn);//closes connection
?>
 <form action="addEventsAttended.php" method="post">
    <h2>Add your events here!</h2>
    
    <label for="eventName"><b>Please enter the name of the event</b></label><br>
    <input type="text" placeholder="Enter event name" name="eventName" id="eventName" required><br>
        
    <label for="eventType"><b>Type Of Event</b></label><br>
    <input type="text" placeholder="Enter type of event" name="eventType" id="eventType" required><br>
   
    <label for="eventPlace"><b>Position placed</b></label><br>
    <input type="number" placeholder="Enter your position" name="eventPlace" id="eventPlace" required><br>

    <label for="eventDate"><b>Date</b></label><br>
    <input type="date" placeholder="Enter date of competition" name="eventDate" id="eventDate" required><br><br>
       
    <button type="submit">Submit</button><br>
</form>

<p></p>
<p></p>

<form action="editEventsAttended.php" method="post">
    <h3>Edit events here!</h3>
    
    <label for="NameOfEvent"><b>Please enter the name of the event to edit</b></label><br> 
        <input type="text" placeholder="Enter event name" name="eventname1" required></br>
        
</br><p id="increase">Please enter updated details</p>

<label for="NameOfEvent"><b>Enter updated name</b></label><br> 
        <input type="text" placeholder="Enter event name" name="eventname-update" required></br>

    <label for="eventtype-update"><b>Updated Type Of Event</b></label><br>
        <input type="text" placeholder="Enter type of event" name="eventtype-update" required></br>
   
    <label for="position-update"><b>Updated Position placed</b></label><br>
        <input type="number" placeholder="Enter your position" name="position-update" required></br>

    <label for="Date-update"><b>Updated Date</b></label><br>
        <input type="date" placeholder="Enter date of competition" name="Date-update" required></br><br>
       
        <button type="submit">Submit</button></br>
</form>
<p></p>
<p></p>
<form action="deleteEventsAttended.php" method = "post">
<h4>Delete events here!</h4>
    
    <label for="NameOfEvent"><b>Please enter the name of the event</b></label><br>
        <input type="text" placeholder="Enter event name" name="eventname" required></br><br>
       
        <button type="submit">Submit</button></br>
   
</div>
</div>
</body>
</html>