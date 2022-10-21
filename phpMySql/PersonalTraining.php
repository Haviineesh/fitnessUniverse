<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"> -->
<style>
.container {
  margin-top: 40px;
}
.btn-primary {
  width: 100%;
}
        </style>

    </head>
    <body>
        <form action="server.php" method="POST">
            <div class="container">
                <div class="panel panel-primary">
                  <div class="fw-bold">Book Personal Training</div>
                  <br>
                    <div class="panel-body">
                       <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                                <label class="control-label">First Name:</label>
                                <input type="text" class="form-control" name="fname" id="fname" required>
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <label class="control-label">Last Name:</label>
                                <input type="text" class="form-control" name="lname" id="lname">
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <label class="control-label">Identity Card Number:</label>
                                <input type="text" class="form-control" name="IcNum" id="IcNum" required>
                             </div>
                          </div>
                          
                           <div class="col-md-6">
                              <label class="control-label">Gender of instructor:</label><br>
                              <input type="radio" id="Male" name="tGender" value="Male" onclick="this.form.submit();">
                              <label for="Male">Male</label><br>
      

                              <input type="radio" id="Female" name="tGender" value="Female" onclick="this.form.submit();">
                              <label for="Female">Female</label><br>
                           </div>
                       </div>
                       <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                                <label class="control-label">Phone Number:</label>
                                <input type="text" class="form-control" name="phNum" id="phNumber" required>
                             </div>
                          </div> <br>
                          <div class="col-md-6">
                              <label class="control-label">Hours of traning:</label><br>
                              <input type="radio" id="one" name="hours" value="1" onclick="this.form.submit();">
                              <label for="hours">1 hour</label><br>
      
                              <input type="radio" id="two" name="hours" value="2" onclick="this.form.submit();">
                              <label for="hours">2 hour</label><br>

                              <input type="radio" id="three" name="hours" value="3" onclick="this.form.submit();">
                              <label for="hours">3 hour</label><br>
      
                              <input type="radio" id="four" name="hours" value="4" onclick="this.form.submit();">
                              <label for="hours">4 hour</label><br>
                           </div>                         
                          <div class='col-md-6'>
                             <div class="form-group">
                                <label class="control-label">Date and Time:</label>
                                <div class='input-group date' id='datetimepicker1'>
   
                                   <input type="datetime-local" id="time" name="time" required>
                                   
                                   
                                   </span>
                                </div>
                             </div>
                          </div>
                              
                        </div>
                        <br>
                      <input type="submit" class="btn btn-primary" name="submit" value="BOOK NOW">
                    </div>
                 </div>
              </div>
            </form>
            <br><br>
            <button class="btn btn-success" onclick="document.location='index.php'">Back</button>
           <!-- <script>
                $(function () {
                          $('#datetimepicker1').datetimepicker();
                      });
           </script>-->
    </body>
    </html>

 