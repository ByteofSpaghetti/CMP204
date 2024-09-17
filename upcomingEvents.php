<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
     <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<!-- Latest compiled Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <?php include_once "includes/links.php" ?>
    </nav>
    <div class="container-fluid">

    <div class="event-info">
    <h1>Upcoming Events</h1>
    <ul id="event-details">
      <li><strong>Date:</strong> May 25, 2024</li>
      <li><strong>Time:</strong> 12:09 PM (GMT)</li>
      <li><strong>Game:</strong> 1st Potato League!</li>
      <li><strong>Location:</strong> Mississipi</li>
    </ul>
    <p id="Count"><strong>Time till event!</strong><p>
    <p id="countdown"></p>
    <p id ="next">Click button to display next event</p>

    <button type="submit" value="submit" onclick=loadDocPrev()>next</button>
    
    <p id ="previous">Click button to display previous event</p>
    <button id ="previousButton">Next</button>


<script src="javascript/script.js"></script>


  </div>
</div>
   
</body>
</html>