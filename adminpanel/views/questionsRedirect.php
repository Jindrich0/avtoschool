<?php
include_once('../../connect.php');

if (isset($_POST['btnQuestionAnswer'])) {
    $answer = $_POST['answer'];
    $idBtnQuestionAnswer = $_POST['btnQuestionAnswer'];

    $sql = "UPDATE `questions` SET `status`='Ответ: $answer'
                WHERE `id`='$idBtnQuestionAnswer'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../questions.php');
    exit( );
}

if (isset($_POST['btnQuestionDelete'])) {
    $idBtnQuestionDelete = $_POST['btnQuestionDelete'];
    $sql = "DELETE FROM `questions` WHERE `id`='$idBtnQuestionDelete'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../questions.php');
    exit( );
}