<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  
</head>
<body>


<?php include('server.php'); ?>
<div class="col-lg-12">
<br><br><br> <h3><b>Bookings :</b></h3>
<br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>IC Number</th>
        <th>Trainer</th>
        <th>Phone</th>
        <th>Hours</th>
        <th>Date&Time</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $a = 0;
    $res=mysqli_query($db,"SELECT * FROM personaltraining");
    while($row=mysqli_fetch_array($res))
    {   $a++;
        echo "<tr>"; 
        echo "<td>"; echo $a; 
        echo "<td>"; echo $row["fname"]; 
        echo "<td>"; echo $row["lname"]; 
        echo "<td>"; echo $row["IcNum"];
        echo "<td>"; echo $row["tGender"];
        echo "<td>"; echo $row["phNum"]; 
        echo "<td>"; echo $row["hours"];
        echo "<td>"; echo $row["datetime"];
        echo "<td>"; ?> <a href="deleteBooking.php?id=<?php echo $row ["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php 
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