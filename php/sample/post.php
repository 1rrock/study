<?php
    include '../connect/connect.php';
    include '../connect/session.php';

    echo $_POST['userEmail'], "<br>";
    echo $_POST['userName'], "<br>";
    echo $_POST['userNickName'], "<br>";
    echo $_POST['userPW'], "<br>";
    echo $_POST['birthYear'], "<br>";
    echo $_POST['birthMonth'], "<br>";
    echo $_POST['birthDay'], "<br>";
    $userEmail = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $userNickName = $_POST['userNickName'];
    $userPW = $_POST['userPW'];
    $birthYear = $_POST['birthYear'];
    $birthMonth = $_POST['birthMonth'];
    $birthDay = $_POST['birthDay'];
?>