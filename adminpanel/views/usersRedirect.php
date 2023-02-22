<?php
include_once('../../connect.php');

if (isset($_POST['btnUserUpdate'])) {
    $FIOUpd = $_POST['FIO'];
    $telephoneUpd = $_POST['telephone'];
    $passwordUpd = $_POST['password'];
    $idBtnUserUpdate = $_POST['btnUserUpdate'];

    $sql = "UPDATE `users`
                SET `FIO`='$FIOUpd',`telephone`='$telephoneUpd',`password`='$passwordUpd'
                WHERE `id`='$idBtnUserUpdate'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../index.php');
    exit( );
}
if (isset($_POST['btnUserDelete'])) {
    $idBtnUserDelete = $_POST['btnUserDelete'];
    $sql = "DELETE FROM `users` WHERE `id`='$idBtnUserDelete'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../index.php');
    exit( );
}

if (isset($_POST['btnUserAdd'])) {
    $FIOAdd = $_POST['FIOAdd'];
    $telephoneAdd = $_POST['telephoneAdd'];
    $passwordAdd = $_POST['passwordAdd'];
    $date = date("d.m.Y");


    $sql = "INSERT INTO `users`(`FIO`,`telephone`, `password`,`date`)
                VALUES ('$FIOAdd','$telephoneAdd','$passwordAdd','$date')";
    $result = mysqli_query($connect, $sql);
    header('Location: ../index.php');
    exit( );
}
