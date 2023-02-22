<?php

include_once("../connect.php");

$fstn = $_POST['fstn'];
$telephone = $_POST['tel'];
$password = $_POST['password'];

$selectrequest = "SELECT * FROM `users` where `telephone` = '$telephone'";
$res = mysqli_query($connect, $selectrequest);
$num = mysqli_num_rows($res);

if ($num == 0) {
    $sqlrequest = "INSERT INTO `users`(`FIO`, `telephone`, `password`, `date`) VALUES ('$fstn', '$telephone', '$password', now())";
    $sqlselect = "SELECT `id`, `FIO`, `telephone` FROM `users` WHERE `telephone` = '$telephone'";
    $request = mysqli_query($connect, $sqlrequest);
    $requestsel = mysqli_query($connect, $sqlselect);
    while ($row = mysqli_fetch_array($requestsel)) {
        $id = $row['id'];
        $fio = $row['FIO'];
        $mobile = $row['telephone'];
        setcookie('id', $id, time() + 3600, "/");
        setcookie('fio', $fio, time() + 3600, "/");
        setcookie('mobile', $mobile, time() + 3600, "/");
    }
    header("Location: ../persacc/lichkab.php");
} else {
    echo "пиздец такой есть";
}
