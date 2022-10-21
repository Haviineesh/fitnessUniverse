<?php 
include"server.php"; 
$id=$_GET["id"];

$username="";
$email="";
$password="";

$res=mysqli_query($db,"SELECT * FROM management WHERE id=$id");
while($row=mysqli_fetch_array($res)){

    $username=$row["username"];
    $email=$row["email"];
    $password=$row["password"];
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Management Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>  
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

  <style type="text/css">
    .btnb {
        background-color: #00b300;
        cursor:pointer;
    }
</style>
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h2>Management Database</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <br>
    <button type="submit" name="updateM" class="btn btn-outline-dark">Update</button>

  </form>
  <br> <br> 
</div>
</div>

<button class="btn btn-success" onclick="document.location='ManagementDb.php'">Back</button>
</body>
<?php
if(isset($_POST['updateM'])){
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password_1);
  mysqli_query($db,"UPDATE management SET username='$_POST[username]', email='$_POST[email]', password='$password' WHERE id=$id");

    ?>
    <script typr="text/javascript">
    window.location="ManagementDb.php";
    </script>
    <?php
}
?>
</html>
