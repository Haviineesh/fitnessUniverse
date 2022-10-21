<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>  

</head>
<body>


<?php include('server.php'); ?>
<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
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
        echo "<td>"; echo $row["FullName"]; 
        echo "<td>"; echo $row["Email"]; 
        echo "<td>"; echo $row["Phone"]; 
        echo "<td>"; echo $row["Message"];
        echo "<td>"; ?> <a href="deleteContact.php?id=<?php echo $row ["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php 
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