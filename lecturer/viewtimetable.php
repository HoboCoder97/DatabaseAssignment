<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Now UI Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                University of
                <br>
                Lifelong Learning
            </a>

        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li >
                    <a href="consultation.php">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Consultation</p>
                    </a>
                </li>
                <li class="active">
                    <a href="viewtimetable.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Timetable</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="../index.html">
                        <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                        <p>Sign Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">User Profile</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-user">
                        <div class="card card-body">
                            <form action="fulltimetable.php" method="post">


                                Week  <input type="number" name="week" value="1">
                                <?php
                                $id = $_POST['id'];
                                echo "<input type='hidden' value='{$_POST['id']}' name='id'>";
                                echo "<input type='hidden' value='{$_POST['name']}' name='name'>";
                                ?>

                                <input type="submit" value="View Full Timetable for Week" >
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-user">
                        <div class="card-body">

                            <?php
                            $name = $_SESSION['name'];
                            echo "<h5>$name   's Timetable</h5>";
                            echo "<table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th> Day </th>
                                            <th> 8:00am </th>
                                            <th> 10:00am </th>
                                            <th> 12:00pm </th>
                                            <th> 2:00pm </th>
                                            <th> 4:00pm </th>
                                        </tr>
                                        </thead>
                                        <tbody>";
                            include ("../includes/db.php");
                            $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
                            $times = array (strtotime("8:00:00"),strtotime("10:00:00"),strtotime("12:00:00"),strtotime("14:00:00"),
                                strtotime("16:00:00"));

                            for ($day=0; $day<5; $day++) {
                                echo "<tr><td>{$days[$day]}</td>";


                                for ($time = 0; $time < 5; $time++) {
                                    $found = 0;
                                    $sql = "select day, time, venue, l2.lec_name, m.mod_name from lec_schedule
    inner join lecturer l2 on lec_schedule.lec_id = l2.lec_id
    inner join module m on lec_schedule.mod_id = m.mod_id
where l2.lec_name = '$name'
ORDER BY FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Satuday', 'Sunday'), time";

                                    // $result = mysqli_real_query($con, $sql);
                                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row['day'] == $days[$day]) {

                                            if (strtotime($row['time']) == $times[$time]) {
                                                if ($row['status'] != "open") {
                                                    echo "<td>{$row['venue']}</td>";
                                                    $found = 1;
                                                }
                                                else {
                                                    echo "<td>Open Consultation Slot</td>";
                                                    $found=1;
                                                }
                                            }


                                        }
                                    }
                                    if ($found==0)
                                        echo "<td>EMPTY</td>";
                                }


                                echo "</tr>";
                            }



                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
</body>

</html>
