<?php
include_once('connect.php');

$datetime = date("Y-m-d H:i:s");
$FIO = $_POST['FIO'];
$telephone = $_POST['telephone'];

$sql="INSERT INTO `callback`(`datetime`, `name`, `phone`, `status`) VALUES ('$datetime','$FIO','$telephone','Ожидает звонка')";
$result=mysqli_query($connect, $sql);
