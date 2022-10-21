
<?php 

  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_management.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
    unset($_SESSION['login_management']);
  	unset($_SESSION['username']);
    header('Cache-Control: no-cache, must-revalidate');
  	header("location: FitnessUniverse.html");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/eecc635fae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>Management page</title>
</head>
</head>
<body> 

    <?php if(isset($_SESSION['success'])) : ?>

    <div>

        <h3>

            <?php

            echo $_SESSION['success'];
            unset($_SESSION['success']);

            ?>
        </h3>
    </div>
<?php endif ?>

 <!-- logged in user information -->
    <header>
 
<nav>
  <ul>
    <li><a href="UserDb.php">User</a></li>
    <li><a href="ManagementDb.php">Management</a></li>
    <li><a href="WorkoutDb.php">Timetable</a></li>
    <li><a href="UserReportDb.php">User Feedback</a></li>
    <li><a href="BookingDb.php">Booking</a></li>
    
  </ul>
</nav>

<div class="fas fa-bars"></div>

</header>


<section id="home">
<?php if(isset($_SESSION['username'])) : ?>
  <div class="logo1">
  <a href="#"><img src="logo.jpg"></a>
</div>
<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>

<a href="FitnessUniverse.html?logout='1'"><button name="logout_user">Log out</button></a>

<?php endif ?>

<h5 style="color:white">This page is to insert, update, view and delete content in the database</h5>
</section>



</body>
<script>
  $(document).ready(function() {
      function disableBack() { window.history.forward() }

      window.onload = disableBack();
      window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
  });
</script>
</html>