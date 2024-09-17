<?php
include 'includes/connectionString.php';



$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

if ($password !== $confirm_password || empty($username) || empty($email) || empty($password)) { // to check if all details have been captured and none are empty
    header("Location: register.php"); //redirects to register
}

if (strlen($password) < 8) { // checks length of password
  header("Location: register.php"); 
    
}

if(!preg_match("#[0-9]#", $password)) { // checks if password containes number
  header("Location: register.php");
}

if(!preg_match("#[a-zA-Z]+#", $password)) { //checks password contains a letter
 header("Location: register.php");
 
} 

$stmt = $conn->prepare("SELECT username FROM details WHERE username = ?"); //prepares statement to query database
$stmt->bind_param('s', $username);//binds variables
$stmt->execute(); //executes statement
$result = $stmt->get_result();//deckares variable result as equal to result from database

if ($result->num_rows > 0) { //if username exists, redirect
    header("Location: register.php");//header redirection to register
    exit();//exit
}
$password = password_hash($password, PASSWORD_DEFAULT);//hashes and salts password

$stmt = $conn->prepare("INSERT INTO details (username, emailaddress, password_hash) VALUES (?, ?, ?)"); //prepares statement to insert user details into database
$stmt->bind_param('sss', $username, $email, $password);//binds variables


if ($stmt->execute()) { //if execution successful, execute success message and redirect to login
    echo "New record created successfully";
    header("Location: login.php");
    exit();
} else { //DELETE
    echo "Error: " . $stmt->error;
}
?>

