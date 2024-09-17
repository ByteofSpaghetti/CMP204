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
    
    <h1>CMP204 Requirements Page - Unit 2 Assessment</h1>
    
    <p>If you have not met a requirement, do not delete it from the table.</p>

        <table id="reqTable">
        <thead>
            <tr>
            <th class="reqCol">Requirement</th>
            <th class="metCol">How did you meet this requirement?</th>
            <th class="fileCol">File name(s), line no.</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <td>HTML5, CSS, JavaScript has been contained within separate files.</td>
            <td>This has been completed with script.js being contained in javascript folder, css in style folder, and HTML5 in most php files.</td>
            <td>N/A</td>
            </tr>

            <tr>
            <td>Use of the Bootstrap framework providing a responsive layout.</td>
            <td>Been achieved with the use of container-fluid at the start of most pages, </td>
            <td>line 23, login.php</td>
            </tr>

            <tr>
            <td>Use of JavaScript to manipulate the DOM based on an event.</td>
            <td>through using javascript to check if password and confirm password match in register</td>
            <td>javascrpt/script.js file, lines 40-53, register.php lines 64-71</td>
            </tr>            
            
            <tr>
            <td>Use of jQuery in conjunction with the DOM.</td>
            <td>through using javascript to check if password and confirm password match in register</td>
            <td>javascrpt/script.js file, lines 40-53, register.php lines 64-7</td>
            </tr>

            <tr>
            <td>Use of AJAX (pure JavaScript i.e. without the use of a library).</td>
            <td>to display previous event in upcomingEvents.php</td>
            <td>javascript/script.js lines 69-82, upcomingEvents.php line 33</td>
            </tr>

            <tr>
            <td>Use of the jQuery AJAX function.</td>
            <td>to display next event in upcomingEvents.php</td>
            <td>javascript/script.js lines 84-88, upcomingEvents.php line 36</td>
            </tr>

            <tr>
            <td>User login functionality (PHP/MySQL).</td>
            <td>through use of INSERT and SELECT statements in processLogin.php and processRegistration.php</td>
            <td>processLogin.php lines 1-41, processRegistration lines 1-51</td>
            </tr>

            <tr>
            <td>Ability to select (SELECT), add (INSERT), edit (UPDATE) and delete (DELETE) information from a database (PHP/MySQL).</td>
            <td>Ability to select was achieved in UserProfile.php using SELECT statements to display events, INSERT through addEventsAttended.php to add events to a database, Update in editEventsAttended, to edit events in event table and delete from events table using deleteEventsAttended.php </td>
            <td>SELECT Userprofile.php lines 40-85 && processLogin line 20, INSERT addEventsAttended.php lines 19-32 && processRegistration lines 40-50. UPDATE editEventsAttended.php lines 21-30, DELETE deleteEventsAttended.php lines 14-30</td>
            </tr>

            <tr>
            <td>Inclusion of GDPR.</td>
            <td> GDPR table in register.php</td>
            <td>register.php lines 24-41</td>
            </tr>

            <tr>
            <td>SQL queries written as prepared statements.</td>
            <td>all SQL queries are written as prepared statements in processRegistration.php, processLogin.php, add, edit and delete events attended and userProfile.php</td>
            <td>in processRegistration.php, line 30.</td>
            </tr>

            <tr>
            <td>Passwords should be salted and hashed.</td>
            <td>passwords salted and hashed using PASSWORD_DEFUALT function in processRegistration</td>
            <td>processRegistration.php line 38</td>
            </tr>

            <tr>
            <td>User input should be sanitised.</td>
            <td>Completed throguh use of mysqli_real_escape_string function on all user input in processRegistration.php, processLogin.php, add, edit and delete events attended and userProfile.php</td>
            <td>for example processRegistration.php lines 6-9</td>
            </tr>
        </tbody>



        </table>

    <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>