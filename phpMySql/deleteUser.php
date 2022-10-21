<?php
include "server.php";
$id=$_GET["id"];

mysqli_query($db,"DELETE FROM user WHERE id=$id");
?>
<script type="text/javascript">
window.location="UserDb.php";
</script>