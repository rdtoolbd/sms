<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>SMS BOOMBER | RIad</title>
</head>
<body>
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form method="post" action="send_sms.php">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>SMS BOOMBER</h1>

  <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<p class='success-message'>Bombing started successfully!</p>";
        } elseif (isset($_GET['status']) && $_GET['status'] == 'failure') {
            echo "<p class='error-message'>Failed to start bombing.</p>";
        }




session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: Boomber_project/index.php');
    exit();
}


        ?>


  <div class="form-group">
    <input type="text" id="number" name="number" required="required" class="form-control"/>
    <label for="number" class="form-label">Phone Number:    </label>
  </div>
  <div class="form-group">
    <input type="number" id="amount" name="amount" required="required" class="form-control"/>
    <label for="amount" class="form-label">Amount:</label>
    <p class="alert">Invalid Credentials..!!</p>
    <button class="btn" type="submit" name="start_bombing" > Start Bombing </button> <br>
    <button class="btn"> <a href="../logout.php">Logout</a></button>
  </div>
</form>


<style>
.success-message {
    color: green;
}

.error-message {
    color: red;
}
a{
    text-decoration: none;
    color:black;
    font-weight: bold;
}
</style>




<!--For auto logout timer-->
<?php
session_start();

// Check if last activity was set
if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > 900) {
  // last request was more than 15 minutes ago
  session_unset(); // unset $_SESSION variable for the run-time
  session_destroy(); // destroy session data in storage
  header("Location: ../logout.php"); // redirect to login page
}
$_SESSION['last_activity'] = time(); // update last activity time stamp
?>
</body>
</html>