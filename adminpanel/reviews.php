<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel - reviews</title>
    <link href="adminpanel.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <header>
        <div class="headerItem logo">
            AdminPanel
        </div>
        <div class="headerItem">
            <a href="../..">ВЫЙТИ</a>
        </div>
    </header>

</div>

<nav>
    <a href="index.php">
        <div class="navItem" >пользователи</div>
    </a>
    <a href="rates.php">
        <div class="navItem">тарифы</div>
    </a>
    <a href="instructors.php">
        <div class="navItem">инструкторы</div>
    </a>
    <a href="reviews.php" style="color: white; background-color: black;">
        <div class="navItem">отзывы</div>
    </a>
    <a href="questions.php">
        <div class="navItem">вопросы</div>
    </a>
    <a href="callbacks.php">
        <div class="navItem">звонки</div>
    </a>
</nav>

<div class="container">

    <div class="tableForm">
        <table>
            <tr>
                <td style="width: 5%">id</td>
                <td style="width: 15%">Клиент</td>
                <td style="width: 10%">Рейтинг</td>
                <td style="width: 15%">Тариф</td>
                <td style="width: 35%">Отзыв</td>
                <td style="width: 10%">Дата</td>
                <td style="width: 10%; text-align: center"> Удалить</td>
            </tr>
        </table>

        <table>
            <?php
            include_once('../connect.php');

            $table=mysqli_query($connect, "SELECT `reviews`.`id`, `reviews`.`rating`, `reviews`.`text`, `reviews`.`date`, `users`.`FIO`, `rates`.`nameRate`
                                                        FROM `reviews`, `users`, `rates`
                                                        WHERE `reviews`.`id_user`=`users`.`id` AND `reviews`.`id_rate`=`rates`.`id`");
            while($row=mysqli_fetch_array($table)){
                $id=$row['id'];
                $FIO=$row['FIO'];
                $rating=$row['rating'];
                $nameRate=$row['nameRate'];
                $text=$row['text'];
                $date=$row['date'];

                echo "<form action='views/reviewsRedirect.php' method='POST'>
                        <tr>
                            <td style='width: 5%'>$id</td>
                            <td style='width: 15%'> $FIO </td>
                            <td style='width: 10%'> <img src='img/star.svg' width='15px'> $rating </td>
                            <td style='width: 15%'> $nameRate </td>
                            <td style='width: 35%'> $text </td>
                            <td style='width: 10%'> $date </td>
                            <td style='width: 10%; text-align: center'>
                             <button class='tableBtn' name='btnReviewDelete' type='submit' value='$id'> <img src='img/delete.svg' alt='delete' style='width: 25px'>  </button>
                             </td>
                          </tr></form>";
            }
            ?>
        </table>

    </div>
</div>
</body>
</html>