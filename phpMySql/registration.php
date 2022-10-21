<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="registerStyle.css">
    <title>Registertion</title>
</head>
<body>

    <div class="register-box">
            <h2>Register to our Universe</h2>

        <form action="registration.php" method="post">
            <?php include('errors.php')?>
            <div class="user-box">
                <input type="text" name="username" required>
                <label for="username">Username </label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required>
                <label for="email">Email </label>
            </div>
            <div class="user-box">
                <input type="password" name="password_1" required>
                <label for="password">Password </label>
            </div>
            <div class="user-box">
                <input type="password" name="password_2" required>
                <label for="password">Confirm Password </label>
            </div>
            <button type="submit" name="reg_user"> Submit 
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            </button>
            <p>Already have an account?<a href="login.php"><b>Log in</b></a></p>

    </form>
    </div>

</body>
</html>