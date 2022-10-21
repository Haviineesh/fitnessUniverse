<?php

session_start();
//initialising variables

$username = "";
$email = "";

$errors = array();

// conect to database
$db = mysqli_connect('localhost','root','','gym')or die("failed to connect to database");

 // Delete old personal traning
 //$SQL = "DELETE  FROM personaltraining WHERE 'datetime' <now() - interval 1 DAY ";

 /*if ($db->query($SQL) === TRUE) {
  echo "Old Training Record deleted successfully";
} else {
  echo "Error deleting record: " . $db->error;
}*/

//register user
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
  
        $query = "INSERT INTO user (username, email, password) 
                  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
  }

//Login user 

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

       if (mysqli_num_rows($results) == 1) { 
          $_SESSION['username'] = $username;
          $_SESSION['id'] = $id;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
            
        }
    }
  }
  
// Login management
if (isset($_POST['login_management'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM management WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);

     if (mysqli_num_rows($results) == 1) { 
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: managementPage.php');
      }else {
          
          array_push($errors, "Wrong username/password combination");
          
      }
  }
 
}
//logout
if (isset($_POST['logout_user'])) {

  //session_start();
  unset($_SESSION['login_management']);
  unset($_SESSION["id"]);
  unset($_SESSION["username"]);
  session_destroy();
  header('Cache-Control: no-cache, must-revalidate');
  header("FitnessUniverse.html");
 
}



//Workout Session

/*if (isset($_POST['day'])) {

$Value = $_POST['day'];
  $sql = "SELECT * FROM workout WHERE W_day = '$Value'";
  $result = $db->query($sql);

if ($result->num_rows > 0) {
  
  echo "<table border='100%'><tr><th>Time</th><th>Activity</th><th>Trainer</th></tr>";
  while($row = $result->fetch_assoc()) {
   
    echo "<tr><td> ". $row["W_time"] ."</td><td>". $row["exercise"] ."</td><td> ". $row["trainer"]. "</td></tr>";
  }
  echo "</table>";
} 
else {
  echo "0 results";
}
$db->close();

echo "<br><br><a href='workoutSession.php'><button>Okay</button></a>";
}*/

// Booking Personal Training
if (isset($_POST['submit'])) {

  mysqli_query($db,"INSERT INTO personaltraining VALUES(NULL,'$_POST[fname]','$_POST[lname]','$_POST[IcNum]','$_POST[tGender]','$_POST[phNum]','$_POST[hours]','$_POST[time]')");
  ?>
  <br><br>
  <h2>You have successfully booked. Thank you!<h2>
  <button  onclick="document.location='index.php'">Okay</button>
 
 <?php
/*
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $phNum = mysqli_real_escape_string($db, $_POST['phNum']);
  $datetimepicker1 = mysqli_real_escape_string($db, $_POST['datetimepicker1']);

  if (empty($lname)) { array_push($errors, "First Name is required"); }
  if (empty($fname)) { array_push($errors, "Last Name is required"); }
  if (empty($phNum)) { array_push($errors, "Phone Number is required"); }
  if (empty($datetimepicker1)) { array_push($errors, "Date and Time is required"); }

 // $query = "INSERT INTO personaltraining (Name, Email, Plan, DateandTime) 
  //                VALUES('$name', '$email', '$plans', '$datetimepicker1')";
   mysqli_query($db,"INSERT INTO personaltraining Values('$fname','$lname','$phNum','$datetimepicker1')");  */
}

// Management Database
//insert
if(isset($_POST['insert'])){
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password_1);
    mysqli_query($db,"INSERT INTO management VALUES(NULL,'$_POST[username]','$_POST[email]','$password')");

}
//update
if(isset($_POST['update'])){
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password_1);
  mysqli_query($db,"UPDATE management SET email='$_POST[email]', password='$password'  WHERE username='$_POST[username]'") or die(mysqli_error($db));

}

//delete
if(isset($_POST['delete'])){

mysqli_query($db,"DELETE FROM management WHERE username='$_POST[username]'") or die(mysqli_error($db));

}

//User Database
//insert
if(isset($_POST['insertU'])){
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password_1);
    mysqli_query($db,"INSERT INTO user VALUES(NULL,'$_POST[username]','$_POST[email]','$password')");

}
//update
if(isset($_POST['updateU'])){
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password_1);
  mysqli_query($db,"UPDATE user SET email='$_POST[email]', password='$password'  WHERE username='$_POST[username]'") or die(mysqli_error($db));

}

//delete
if(isset($_POST['deleteU'])){

mysqli_query($db,"DELETE FROM user WHERE username='$_POST[username]'") or die(mysqli_error($db));

}

//Workout Database
//insert
if(isset($_POST['insertW'])){
 
    mysqli_query($db,"INSERT INTO workout VALUES(NULL,'$_POST[W_day]','$_POST[exercise]','$_POST[trainer]','$_POST[W_time]')");

}

//Contact Database
if(isset($_POST['contact'])){
 
  mysqli_query($db,"INSERT INTO contact VALUES(NULL,'$_POST[FullName]','$_POST[Email]','$_POST[Phone]','$_POST[Message]')");
  ?>
  <br><br>
  <h2>Your message has been received. Thank you!<h2>
  <button  onclick="document.location='index.php'">Okay</button>
 
 <?php
}




  ?>
