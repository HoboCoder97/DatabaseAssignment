<?php


session_start();
include("../includes/db.php");
$id = $_POST['id'];
$sql = "UPDATE booking_schedule SET status = 'open' WHERE booking_id = $id";

$result = mysqli_query($con, $sql) or die (mysqli_error($con));

?>
<script type="text/javascript">
    alert("Consultation Cancelled");
    window.location.href = "consultation.php";
</script>
