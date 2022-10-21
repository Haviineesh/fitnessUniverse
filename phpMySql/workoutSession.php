<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Workout Session</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  
</head>
<body>
<h2>Workout Sessions</h2>


    <p>Timetable for workout sessions :</p>
    <form class="" action="workoutSession.php" method="POST">
    <hr>
    <fieldset class="row mb-3" >
    <legend class="col-form-label col-sm-2 pt-0">&ensp; Day:</legend>
         <div class="col-sm-10">
            <input type="radio" id="Monday" name="day" value="Monday" onclick="this.form.submit();">
            <label for="Monday">Monday</label><br>
            

        <input type="radio" id="Tuesday" name="day" value="Tuesday" onclick="this.form.submit();">
        <label for="Tuesday">Tuesday</label><br>

        <input type="radio" id="Wednesday" name="day" value="Wednesday" onclick="this.form.submit();">
        <label for="Wednesday">Wednesday</label><br>

        <input type="radio" id="Thursday" name="day" value="Thursday" onclick="this.form.submit();">
        <label for="Thursday">Thursday</label><br>

        <input type="radio" id="Friday" name="day" value="Friday" onclick="this.form.submit();">
        <label for="Friday">Friday</label><br>

        <input type="radio" id="Saturday" name="day" value="Saturday" onclick="this.form.submit();">
        <label for="Saturday">Saturday</label><br>

        <input type="radio" id="Sunday" name="day" value="Sunday" onclick="this.form.submit();">
        <label for="Sunday">Sunday</label><br>
        </div>
    </fieldset>
    </form>
    <hr>
    <br><br>
    <?php
     if (isset($_POST['day'])) {
     echo  $_POST['day']; 
     }
     ?>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Time</th>
        <th>Activity</th>
        <th>Trainer</th>
        
      </tr>
    </thead>
    <tbody>
     <?php
     if (isset($_POST['day'])) {
    $Value = $_POST['day'];
    $a = 0;
    $res=mysqli_query($db,"SELECT * FROM workout WHERE W_day = '$Value'");
    while($row=mysqli_fetch_array($res))
    {   $a++;
        echo "<tr>"; 
        echo "<td>"; echo $a; 
        echo "<td>"; echo $row["W_time"]; 
        echo "<td>"; echo $row["exercise"]; 
        echo "<td>"; echo $row["trainer"];
        echo "<tr>";

    }
    }
    ?>
      
    </tbody>
  </table>
</div>
 

<br><br><a href='index.php'><button class="btn btn-success" >Back</button></a>
</body>
</html>