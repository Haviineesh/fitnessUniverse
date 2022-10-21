<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>  

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  
</head>
<body>


<?php include('server.php'); ?>
<div class="col-lg-12">
<br><br><br><br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $res=mysqli_query($db,"SELECT * FROM contact");
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>"; 
        echo "<td>"; echo $row["id"]; 
        echo "<td>"; echo $row["FullName"]; 
        echo "<td>"; echo $row["Email"]; 
        echo "<td>"; echo $row["Phone"]; 
        echo "<td>"; echo $row["Message"];
        echo "<td>"; ?> <a href="deleteReport.php?id=<?php echo $row ["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php 
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