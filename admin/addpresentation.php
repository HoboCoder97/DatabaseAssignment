<?php
$day = $_POST['day'];
$time = $_POST['time'];
$week = $_POST['week'];
$lecid = $_POST['lecid'];
$stuid = $_POST['stuid'];

include ("../includes/db.php");

$mysql = "INSERT INTO booking_schedule (day, time, week_id, venue, status, type_id, stud_id, lec_id)
                VALUES ('$day', '$time', $week, 'Presentation Room', 'confirmed', 1, $stuid, $lecid)";
echo $mysql;
$result = mysqli_query ($con, $mysql) or die (mysqli_error($con));

?>
<script type="text/javascript">
    alert("Presentation Slot Created");
    window.location.href = "viewpresentationslot.php";
</script>



