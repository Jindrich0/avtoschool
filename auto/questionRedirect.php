<?php
include_once('connect.php');

$datetime = date("Y-m-d H:i:s");
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

$sql="INSERT INTO `questions`(`datetime`, `name`, `phone`, `email`, `text`, `status`) VALUES ('$datetime','$name','$phone','$email','$text','Ожидает ответа')";
$result=mysqli_query($connection, $sql);

