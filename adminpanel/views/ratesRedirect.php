<?php
include_once('../../connect.php');

if (isset($_POST['btnRateUpdate'])) {
    $nameRate = $_POST['nameRate'];
    $descriptionRate = $_POST['descriptionRate'];
    $gearBox = $_POST['gearBox'];
    $priceRate = $_POST['priceRate'];
    $idBtnRateUpdate = $_POST['btnRateUpdate'];

    $sql = "UPDATE `rates`
                SET `nameRate`='$nameRate',`descriptionRate`='$descriptionRate',`gearBox`='$gearBox',`priceRate`='$priceRate'
                WHERE `id`='$idBtnRateUpdate'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../rates.php');
    exit( );
}
if (isset($_POST['btnRateDelete'])) {
    $idBtnRateDelete = $_POST['btnRateDelete'];
    $sql = "DELETE FROM `rates` WHERE `id`='$idBtnRateDelete'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../rates.php');
    exit( );
}

if (isset($_POST['btnRateAdd'])) {
    $nameRateAdd = $_POST['nameRateAdd'];
    $descriptionRateAdd = $_POST['descriptionRateAdd'];
    $gearBoxAdd = $_POST['gearBoxAdd'];
    $priceRateAdd = $_POST['priceRateAdd'];


    $sql = "INSERT INTO `rates`(`nameRate`,`descriptionRate`, `gearBox`,`priceRate`)
                VALUES ('$nameRateAdd','$descriptionRateAdd','$gearBoxAdd','$priceRateAdd')";
    $result = mysqli_query($connect, $sql);
    header('Location: ../rates.php');
    exit( );
}