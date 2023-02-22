<?php
include_once('../../connect.php');

if (isset($_POST['btnReviewDelete'])) {
    $idBtnReviewDelete = $_POST['btnReviewDelete'];
    $sql = "DELETE FROM `reviews` WHERE `id`='$idBtnReviewDelete'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../reviews.php');
    exit( );
}