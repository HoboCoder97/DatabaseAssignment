<?php

include ("db.php");


if (isset($_POST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `student` WHERE stud_name='$username'
and stud_password='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($rows == 1) {
        session_start();
        $_SESSION["id"]=$row['stud_id'];
        $_SESSION["name"]=$row['stud_name'];
        // Redirect user to dashboard.html
        header("Location: ../student/viewlecturer.php");
    }
    else {
        $query = "SELECT * FROM `lecturer` WHERE lec_name='$username'
and lec_password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if ($rows == 1){
            $type = "LECTURER";
            session_start();
            $_SESSION["id"]=$row['lec_id'];
            $_SESSION["name"]=$row['lec_name'];
            // Redirect user to dashboard.html
            header("Location: ../lecturer/viewtimetable.php");
        }
        else {
            $query = "SELECT * FROM `admin` WHERE admin_name='$username'
and admin_password='$password'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            if ($rows == 1){
                $type = "ADMIN";
                session_start();
                $_SESSION['id']=$row['admin_id'];
                // Redirect user to dashboard.html
                header("Location: ../admin/viewlecturer.php");
            }
            else
            {
                ?>
                <script type="text/javascript">
                alert("Wrong username or password");
                window.location.href = "../index.html";
            </script>
<?php
            }
        }
    }

}
?>