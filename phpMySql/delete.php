<?php
include "server.php";
$id=$_GET["id"];

mysqli_query($db,"DELETE FROM management WHERE id=$id");
?>
<script type="text/javascript">
window.location="ManagementDb.php";
</script>