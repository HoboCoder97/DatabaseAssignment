<?php
session_start();
include ("../includes/db.php");

$status = $_POST['status'];
$id = $_POST['id'];

if ($status == 'confirmed'){
    $sql = "UPDATE booking_schedule SET status = 'completed' WHERE booking_id = $id";
   }
else if ($status == 'pending'){
    $sql = "UPDATE booking_schedule SET status = 'confirmed' WHERE booking_id = $id";
}
else if ($status == 'open'){
    $sql = "DELETE FROM `booking_schedule` WHERE `booking_schedule`.`booking_id` = $id";
}
echo $sql;
$result = mysqli_query($con, $sql) or die (mysqli_error($con));

?>
<script type="text/javascript">
    alert("Action Done");
    window.location.href = "consultation.php";
</script>

