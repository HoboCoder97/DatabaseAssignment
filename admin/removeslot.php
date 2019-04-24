<?php
include ("../includes/db.php");

$id = $_POST['id'];

$sql = "UPDATE booking_schedule SET status='completed' WHERE booking_id=$id";

mysqli_query($con, $sql) or die (mysqli_error($con));

?>


<script type="text/javascript">
    alert("Presentation Slot Removed");
    window.location.href = "presentation.php";
</script>



