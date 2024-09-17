<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
</head>
<body>
    <nav>
        <?php include_once "includes/links.php" ?>
    </nav>
    <div class="container-fluid"> 

<img src="images/Seal.jpg" alt="Privacy seal" style="width:120px;height:120px;"> 
<!--https://www.eprivacy.eu/en/privacy-seals/eprivacyseal-eu/-->
        <h2>Lorem of Ipsum Privacy Policy</h2>

        <table>
            <thead>
                <tr>
                    <th class="reqCol">Requirement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>GDPR1: Your email, a username and password will be collected</td>
                </tr>
                <tr>
                    <td>GDPR2: This data is to allow you to create an account to view and add your own events</td>
                </tr>
                <tr>
                    <td>GDPR3: Data will be stored in a database with passwords stored securely.</td>
                </tr>
                <tr>
                    <td>GDPR4:data will be retained for a year </td>
                </tr>
                <tr>
                    <td>GDPR5: to remove your data email 2200980@uad.ac.uk</td>
                </tr>
            </tbody>
        </table>

        <h1>Register</h1>

        <p>Register for your Lorem of Ipsum profile here!.</p>

        <form action="processRegistration.php" method="post">
            <p>Please choose a unique username, you will be sent back to this page if the chosen name is taken</p>
            <label for="username"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="username" required><br>

            <label for="email"><b>Email address</b></label><br>
            <input type="text" placeholder="Enter email address" name="email" required><br>
            <p>Password policy</p>
            <ul>
            <li>Password must be more than 8 characters</li>
            <li>Must contain a number</li>
            <li>Must contain a letter</li>
            </ul>

            <label for="password"><b>Password</b></label><br>
            <input id="Password" type="password" placeholder="Enter password" name="password" required><br>
            <div id="password-error1"></div>



            <label for="Confirm-password"><b>Confirm Password</b></label><br>
            <input id="confirm-password" type="password" placeholder="Confirm password" name="confirm-password" required><br><br>
            
            <input type ="checkbox" value="GDPR" required>

            <label for="GDPR">By signing into this website i have read the above privacy policy</label><br>

            <input type="submit" value="Submit"></br><br>
        </form>

    </div>
</body>
</html>
