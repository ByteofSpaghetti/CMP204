<?php
session_start(); //start session

include 'includes/connectionString.php'; //connects to database

if ($conn->connect_error) { //if connection fails redirect to Login.php and exit
   // header("Location: Login.php");
   // exit(); // Exit after redirection
   echo "connected successfully";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {//if the server method is post, get username and password variables in form 
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    echo "got variables successfully";


    if(empty($username) || empty($password)) { //if one or both are empty redirect to login.php and exit
        header('Location: Login.php');
        exit();
    }

    $stmt = $conn->prepare("SELECT username, password_hash FROM details WHERE username = ?"); //Prepared satement to select username and password hash from details table where username is equal to what user entered
    $stmt->bind_param('s', $username);//binds variable to the statement 
    $stmt->execute();//executes statemtner
    $result = $stmt->get_result();//declares variable $result to equal result from statement

    if ($result && $result->num_rows > 0) { //if result number of rows is more than 0 code continues
        $row = $result->fetch_assoc();//creates associative array of results called row
        echo "AHHHHHHHHHHG";
    //remove
    
        if (password_verify($password, $row['password_hash'])) {//if password matches the password for the username, set global session variable bool loggedin to true, and global variable username to the username, and redirect to userProfile.php
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            header("Location: userProfile.php");
            exit(); 
        } else { //else redirect to Login.php
            header('Location: login.php');
            exit(); 
            //echo "wrong password";
         }
    } else { //esle redirect to Login.php
        header('Location: login.php');
        exit(); 
        echo "no rows";
     }
    }//end brackets

?>