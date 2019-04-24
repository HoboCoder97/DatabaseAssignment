<?php
session_start();
include ("../includes/db.php");

$time = $_POST['time'];
$day = $_POST['day'];
$week = $_POST['week'];
$id = $_SESSION['id'];
$name = $_SESSION['name'];

$sql = "insert into booking_schedule (day, time, week_id, venue, status, type_id, lec_id)
VALUES
('$day', '$time', $week, '$name Office', 'open', 2, $id )";

mysqli_query($con, $sql) or die (mysqli_error($con));

?>

<script type="text/javascript">
    alert("Consultation Time Added");
    window.location.href = "consultation.php";
</script>


