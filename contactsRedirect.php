<?php
include_once('connect.php');

$datetime = date("Y-m-d H:i:s");
$text = $_POST['text'];

if (empty($_POST['btnSubmit'])) {
    $FIO = $_POST['FIO'];
    $telephone = $_POST['telephone'];

    $sql = "INSERT INTO `questions`(`datetime`, `FIOuser`, `telephone`, `question`, `status`)
        VALUES ('$datetime','$FIO','$telephone','$text','Ожидает ответа')";
    $result = mysqli_query($connect, $sql);
}

if (!empty($_POST['btnSubmit'])) {
    $id_user = $_POST['btnSubmit'];

    $sql = "INSERT INTO `questions`(`datetime`, `id_user`, `question`, `status`)
        VALUES ('$datetime','$id_user','$text','Ожидает ответа')";
    $result = mysqli_query($connect, $sql);
}

