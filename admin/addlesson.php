<?php

include ("../includes/db.php");
$day = $_POST['day'];
$modid = $_POST['moduleid'];
$time = $_POST['time'];
$lecid = $_POST['lec'];
$venue = $_POST['venue'];

$sql = "insert into lec_schedule (day, time, venue, lec_id, mod_id, sec_id) VALUES
('$day', '$time', '$venue', $lecid, (select module.mod_id from module where mod_name = '$modid'), 1)";
echo $sql;
$result = mysqli_query($con, $sql) or die (mysqli_error($con));

?>

<script type="text/javascript">
    alert("Lesson Added");
    window.location.href = "viewlecturer.php";
</script>


