<?php
    ob_start();

    $timezone = date_default_timezone_set("America/Los_Angeles");

    $con = mysqli_connect("localhost", "root", "", "project");

    if(mysqli_connect_errno()){
        echo "failed to connect: " . mysqli_connect_error();
    }
    ?>

