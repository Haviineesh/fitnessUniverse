<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="loginStyle.css">
    <title>Login</title>
</head>
<body>

<div class="login-box">
  <h2>Management Login</h2>
  <form action="login_management.php" method="post">
  <?php include('errors.php')?>
    <div class="user-box">
        <input type="text" name="username" required>
        <label for="username">Username</label>
    </div>
    <div class="user-box">
        <input type="password" name="password" required>
        <label for="password">Password</label>
    </div>
    <button type="submit" name="login_management"> Log in 
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      </button>
    <p>This page is for Management only!<a href="FitnessUniverse.html"><b>Click here to go back</b></a></p>
  </form>
</div>
</body>
</html>
    