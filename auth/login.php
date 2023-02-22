<?php

include_once("../connect.php");

$telephone = $_POST['tel'];
$password = $_POST['password'];

$sqlrequest = "SELECT `telephone`, `password`, `id`, `FIO` FROM `users` WHERE $telephone = `telephone` AND $password = `password`";
$result = mysqli_query($connect, $sqlrequest);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $fio = $row['FIO'];
    $mobile = $row['telephone'];
    setcookie('id', $id, time() + 3600, "/");
    setcookie('fio', $fio, time() + 3600, "/");
    setcookie('mobile', $mobile, time() + 3600, "/");
}
$request = mysqli_query($connect, $sqlrequest);

header("Location: ../");
