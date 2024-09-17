<?php
//connection details
$servername = ""; 
$dbusername = "";
$dbpassword = "";
$dbname = "";

$conn = mysqli_connect($servername, $dbusername, $dbpassword);

if ($conn->connect_error) {
  }
  else {
  }

  if (mysqli_select_db($conn, $dbname)) {
  } 
  else {
}

