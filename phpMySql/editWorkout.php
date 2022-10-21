<?php 
include"server.php"; 
$id=$_GET["id"];

$W_day="";
$exercise="";
$trainer="";
$W_time="";

$res=mysqli_query($db,"SELECT * FROM workout WHERE workoutID=$id");
while($row=mysqli_fetch_array($res)){

    $W_day=$row["W_day"];
    $exercise=$row["exercise"];
    $trainer=$row["trainer"];
    $W_time=$row["W_time"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Workout Timetable Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>  
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
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
  <h2>Workout Timetable Database</h2>
  <form action="" name="form1" method="POST">
  <div class="form-group">
      <label for="W_day">Day</label>
      <input type="text" class="form-control" id="W_day" placeholder="Enter day" name="W_day" value="<?php echo $W_day; ?>">
    </div>
    <div class="form-group">
      <label for="exercise">Exercise</label>
      <input type="text" class="form-control" id="exercise" placeholder="Enter excercise" name="exercise" value="<?php echo $exercise; ?>">
    </div>
    <div class="form-group">
      <label for="trainer">Trainer</label>
      <input type="text" class="form-control" id="trainer" placeholder="Enter trainer name" name="trainer" value="<?php echo $trainer; ?>">
    </div>
    <div class="form-group">
      <label for="W_time">Time</label>
      <input type="text" class="form-control" id="W_time" placeholder="Enter time" name="W_time" value="<?php echo $W_time; ?>">
    </div>
    <br>
    <button type="submit" name="updateWorkout" class="btn btn-outline-dark">Update</button>

  </form>
  <br> <br> 
</div>
</div>
<button class="btn btn-success" onclick="document.location='WorkoutDb.php'">Back</button>
</body>
<?php
if(isset($_POST['updateWorkout'])){
 
  mysqli_query($db,"UPDATE workout SET W_day='$_POST[W_day]', exercise='$_POST[exercise]',trainer='$_POST[trainer]', W_time='$_POST[W_time]' WHERE workoutID=$id");

    ?>
    <script typr="text/javascript">
    window.location="WorkoutDb.php";
    </script>
    <?php
}
?>
</html>
