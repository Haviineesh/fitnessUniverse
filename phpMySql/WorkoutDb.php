<!DOCTYPE html>
<html lang="en">
<head>
  <title>Workout Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h2>Workout Timetable Database</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="W_day">Day</label>
      <input type="text" class="form-control" id="W_day" placeholder="Enter day" name="W_day">
    </div>
    <div class="form-group">
      <label for="exercise">Exercise</label>
      <input type="text" class="form-control" id="exercise" placeholder="Enter excercise" name="exercise">
    </div>
    <div class="form-group">
      <label for="trainer">Trainer</label>
      <input type="text" class="form-control" id="trainer" placeholder="Enter trainer name" name="trainer">
    </div>
    <div class="form-group">
      <label for="W_time">Time</label>
      <input type="text" class="form-control" id="W_time" placeholder="Enter time" name="W_time">
    </div>
    <br>
    <button type="submit" name="insertW" class="btn btn-outline-dark">Insert</button>

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
        <th>Workout Day</th>
        <th>Exercise</th>
        <th>Trainer</th>
        <th>Time</th>
        <th>Edit</th>
        <th>Delete</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    $res=mysqli_query($db,"SELECT * FROM workout");
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["workoutID"]; 
        echo "<td>"; echo $row["W_day"]; 
        echo "<td>"; echo $row["exercise"]; 
        echo "<td>"; echo $row["trainer"]; 
        echo "<td>"; echo $row["W_time"]; 
        echo "<td>"; ?> <a href="editWorkout.php?id=<?php echo $row ["workoutID"];?>"><button type="button" class="btn btn-success">Edit</button></a> <?php 
        echo "<td>"; ?> <a href="deleteWorkout.php?id=<?php echo $row ["workoutID"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php 
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