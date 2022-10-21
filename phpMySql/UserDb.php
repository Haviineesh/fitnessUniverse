<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
-->
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h2>User Database</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <br>
    <button type="submit" name="insertU" class="btn btn-outline-success">Insert</button>
    <button type="submit" name="updateU" class="btn btn-outline-dark">Update</button>
    <button type="submit"  name="deleteU" class="btn btn-outline-danger">Delete</button>
  </form>
  <br> <br> 
</div>
</div>

<?php include('server.php'); ?>
<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $res=mysqli_query($db,"SELECT * FROM user");
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["id"]; 
        echo "<td>"; echo $row["username"]; 
        echo "<td>"; echo $row["email"]; 
        echo "<td>"; echo $row["password"]; 
        echo "<td>"; ?> <a href="editUser.php?id=<?php echo $row ["id"];?>"><button type="button" class="btn btn-success">Edit</button></a> <?php 
        echo "<td>"; ?> <a href="deleteUser.php?id=<?php echo $row ["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php 
        echo "<tr>";

    }

    ?>
      
    </tbody>
  </table>
<br><br>
</div>

<button class="btn btn-success" onclick="document.location='managementPage.php'">Back</button>
 

</body>


</html>