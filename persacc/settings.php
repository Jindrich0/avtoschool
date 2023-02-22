<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/glavnai.css">
    <link rel="stylesheet" href="settings.css">
    <title>Document</title>
    <style>
        
    </style>
</head>

<body>
    <div class="container">
        <div class="info_left">
            <ul>
                <li>
                    <div class="tabi">
                        <a href="../" style="color: black;">Главная</a>
                    </div>
                </li>
                
                <li>
                    <div class="tabi">
                        <a href="../persacc/lichkab.php" value="account" style="color: black;">Аккаунт</a>
                    </div>
                </li>

                <li>
                    <div class="tabi" style="margin-top: 30px;">
                        <a href="../persacc/settings.php" style="color: black;">Настройки</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="info_right">
            <form action="../persacc/settings.php" method="GET" style="padding: 80px;">
                <ul style="padding: 50px 0px 0px 100px; margin: 10px 0px 0px 15%;">
                    <?php
                    include_once("../connect.php");
                    $idcook = $_COOKIE['id'];
                    $sql = "SELECT `telephone`, `password` FROM `users` WHERE `id` = '$idcook'";
                    $query = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        $telephone = $row['telephone'];
                        $password = $row['password'];
                        echo "<li>
                            <div style='margin-bottom: 3%'>Ваш текущий телефон: $telephone</div><input type='text' name='newtelephone' style='background: #D9D9D9' placeholder='Ведите новый номер телефона...'>
                            </li>
                        <li>
                        <div style='margin-bottom: 3%; margin-top: 3%;'>Ваш текущий пароль: $password</div><input type='text' name='newpassword' style='background: #D9D9D9;' placeholder='Введите новый пароль...'>
                            </li>
                            <button type='submit' style='background: #2f2f2f; border-radius: 10px; width: 300px; height: 30px; color: white;  margin-top: 3%;'>Подтвердить</button>";
                    }
                    ?>
                </ul>
            </form>
        </div>
    </div>
    <?php
    $newtelephone = $_GET['newtelephone'];
    $newpassword = $_GET['newpassword'];
    if (!empty($newtelephone) and !empty($newpassword)) {
        $sql = "UPDATE `users` SET `telephone`='$newtelephone', `password`='$newpassword' WHERE `telephone` = '$cook'";
        $query = mysqli_query($connect, $sql);
        setcookie('telephone', $newtelephone, "/");
        header("Location: ../persacc/lichkab.php");
    }
    ?>
</body>

</html>