<?php
    $host = "localhost";
    $user = "zxcv1685";
    $pw = "dnjsfkr2#";
    $dbName = "zxcv1685";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        // echo "database connect true";
    }
?>