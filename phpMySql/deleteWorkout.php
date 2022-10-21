<?php
include "server.php";
$id=$_GET["id"];

mysqli_query($db,"DELETE FROM workout WHERE workoutID=$id");
?>
<script type="text/javascript">
window.location="WorkoutDb.php";
</script>