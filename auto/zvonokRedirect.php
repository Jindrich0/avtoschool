<?php
include_once('connect.php');

$datetime = date("Y-m-d H:i:s");
$name = $_POST['name'];
$phone = $_POST['phone'];

$sql="INSERT INTO `callback`(`datetime`, `name`, `phone`, `status`) VALUES ('$datetime','$name','$phone','Ожидает звонка')";
$result=mysqli_query($connection, $sql);

