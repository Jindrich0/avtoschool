<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/glavnai.css">
    <link rel="stylesheet" href="lichkab.css">

    <?php include_once('../connect.php') ?>
    <style>
        
    </style>

    <script>
        // function showAccount(){
        //     document.getElementById('info_right').innerHTML = 'sdsd';
        // }
        // function showSettings(){
        //     document.getElementById('info_right').innerHTML = 'dddd';
        // }
    </script>
</head>

<body>

    <div class="container">

        <div class="info_left">
            <div class="info_left_row">
                <ul>
                    <li>
                        <div>
                            <a href="../" style="color: black;">Главная</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="../persacc/lichkab.php" value="account" style="color: black;">Аккаунт</a>
                        </div>
                    </li>
                    <li>
                        <div style="margin-top: 30px;">
                            <a href="../persacc/settings.php" style="color: black;">Настройки</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="info_right" id="info_right">

            <?php
            $idcook = $_COOKIE['id'];
            $sql = "SELECT `FIO`, `telephone`, `date` FROM `users` where `id` = '$idcook'";
            $query = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_array($query)) {
                $fio = $row['FIO'];
                $telephone = $row['telephone'];
                $date = $row['date'];
                echo "<table><tr>
                        <td>$fio</td>
                        <td>$telephone</td>
                        <td>$date</td>
                    </tr></table>";
            }
            ?>

            <div class="tableForm nav" style="padding: 80px;">
                <div class="navItem">Здесь ваши вопросы и ответы от администрации!</div>
                    
                <table>
                    
                        <?php
                        $sql = "SELECT `datetime`, `FIOuser`, `telephone`, `question`, `status` FROM `questions` WHERE `id_user` = '$idcook'";
                        $query = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            $name = $row['FIOuser'];
                            $telephone = $row['telephone'];
                            $question = $row['question'];
                            $status = $row['status'];
                            $datetime = $row['datetime'];
                            echo "<tr>
                            <td style='width: 40%'>$question</td>
                            <td style='width: 30%'>$status</td>
                            <td style='width: 30%'>$datetime</td></tr>";
                        }
                        ?>
                    
                </table>
            </div>
            <div class="yourcomment" style="padding: 80px;">
                <div class="navItem">Здесь отображаются отзывы, который вы добавили на сайт!</div>
                <table>
                    <tr>
                        <?php
                        $sql = "SELECT `users`.`id`, `reviews`.`id_user`, `users`.`FIO`,`reviews`.`id_rate`, `reviews`.`rating`, `reviews`.`text`, `reviews`.`date`
                                 FROM `reviews`,`users`
                                  WHERE `reviews`.`id_user`=$idcook AND `users`.`id`=$idcook";
                        $query = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            $fio = $row['FIO'];
                            $rating = $row['rating'];
                            $text = $row['text'];
                            echo "<td style='width: 10%'>$rating &#9733; </td>
                            <td style='width: 60%'>$text</td>
                            <td style='width: 30%'>$datetime</td>";
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>