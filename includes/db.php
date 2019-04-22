<?php


    $dbhost = "localhost";
    $dbuser = "username";
    $dbpass = "password";
    $db = "DatabaseAssignment";
    $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $con->error);

