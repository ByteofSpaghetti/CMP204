<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
  header("Location: userProfile.php");
  exit();
}
?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="javascript/script.js"></script>
</head>
<body>

    <nav>
        <?php include_once "includes/links.php" ?>
    </nav>
    <div class="container-fluid"> 

    <h1>Login</h1>
    <p>Please login to view your profile, and upcoming events!</p>
    <form action="processLogin.php" method="post">

        <label for="username"><b>Username</b></label><br>
        <input type="text" placeholder="Enter Username" name="username" required></br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required></br><br>
        <button type="submit">Login</button></br>
</form>
</div>

</div>
    

    

    <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>