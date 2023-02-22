<?php
include_once('../../connect.php');

if (isset($_POST['btnInstructorUpdate'])) {
    $instFIOUpd = $_POST['instFIO'];
    $drivingExperienceUpd = $_POST['drivingExperience'];
    $ageUpd = $_POST['age'];
    $imgUpd = $_POST['img'];
    $idBtnInstructorUpdate = $_POST['btnInstructorUpdate'];

    $sql = "UPDATE `instructors`
                SET `instFIO`='$instFIOUpd',`drivingExperience`='$drivingExperienceUpd',`age`='$ageUpd',`img`='$imgUpd'
                WHERE `id`='$idBtnInstructorUpdate'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../instructors.php');
    exit( );
}
if (isset($_POST['btnInstructorDelete'])) {
    $idBtnInstructorDelete = $_POST['btnInstructorDelete'];
    $sql = "DELETE FROM `instructors` WHERE `id`='$idBtnInstructorDelete'";
    $result = mysqli_query($connect, $sql);
    header('Location: ../instructors.php');
    exit( );
}

if (isset($_POST['btnInstructorAdd'])) {
    $instFIOAdd = $_POST['instFIOAdd'];
    $drivingExperience = $_POST['drivingExperience'];
    $ageAdd = $_POST['ageAdd'];
    $imgAdd = $_POST['imgAdd'];


    $sql = "INSERT INTO `instructors`(`instFIO`, `drivingExperience`, `age`, `img`)
                VALUES ('$instFIOAdd','$drivingExperience','$ageAdd','$imgAdd')";
    $result = mysqli_query($connect, $sql);
    header('Location: ../instructors.php');
    exit( );
}