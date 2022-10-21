<?php
include "server.php";
$id=$_GET["id"];

mysqli_query($db,"DELETE FROM contact WHERE id=$id");
?>
<script type="text/javascript">
window.location="UserReportDb.php";
</script>