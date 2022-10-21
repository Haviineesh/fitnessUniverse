<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="loginStyle.css">
    <title>Login</title>
</head>
<body>

<div class="login-box">
  <h2>Login To Our Universe</h2>
  <form action="login.php" method="post">
  <?php include('errors.php')?>
    <div class="user-box">
        <input type="text" name="username" required>
        <label for="username">Username</label>
    </div>
    <div class="user-box">
        <input type="password" name="password" required>
        <label for="password">Password</label>
    </div>
    <button type="submit" name="login_user"> Log in 
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      </button>
    <p>Not yet register?<a href="registration.php"><b>Click here</b></a></p>
    <span></span>
    <span></span>
    <a href="FitnessUniverse.html"><b>Exit Login</b></a>
  </form>
</div>
</body>
</html>
    