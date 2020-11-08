<?php

    session_start();

    $login = $_POST['login'];
    $pass = $_POST['password'];

    include("functions.php");

    $connect = dbconnect();

    $checkData = $connect->prepare("SELECT * from `users` WHERE `login` = :login and `pass` = :pass");
    $checkData->bindValue(":login",$login,PDO::PARAM_STR);
    $checkData->bindValue(":pass",$pass,PDO::PARAM_STR);
    $checkData->execute();

    $finishData = $checkData->fetch();

    if($finishData['login'] == $login and $finishData['pass'] == $pass)
    {
        $_SESSION['logged'] = TRUE;
        $_SESSION['name'] = $finishData['name'];
        $_SESSION['surname'] = $finishData['surname'];

        header("Location: ../../indexMenager.php");
    }
    else
    {
        header("Location: ../../pages/login.php");
    }

?>