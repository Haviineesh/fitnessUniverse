<?php
include "server.php";
$id=$_GET["id"];

mysqli_query($db,"DELETE FROM personaltraining WHERE id=$id");
?>
<script type="text/javascript">
window.location="BookingDb.php";
</script>