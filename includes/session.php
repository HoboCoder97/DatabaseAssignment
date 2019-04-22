<?php
session_start();
if ($type == "STUDENT"){
    $_SESSION['studentid'] = $row['stud_id'];
} else if ($type == "LECTURER"){

}
else {

}

