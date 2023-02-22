<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel - questions</title>
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
    <a href="reviews.php">
        <div class="navItem">отзывы</div>
    </a>
    <a href="questions.php">
        <div class="navItem">вопросы</div>
    </a>
    <a href="callbacks.php" style="color: white; background-color: black;">
        <div class="navItem">звонки</div>
    </a>
</nav>

<div class="container">

    <div class="tableForm">
        <table>
            <tr>
                <td style="width: 10%">id</td>
                <td style="width: 30%">Пользователь</td>
                <td style="width: 20%">Телефон</td>
                <td style="width: 20%">Дата</td>
                <td style="width: 20%">Статус</td>
            </tr>
        </table>

        <table>
            <?php
            include_once('../connect.php');

            $table=mysqli_query($connect, "SELECT * from `callback`");
            while($row=mysqli_fetch_array($table)){
                $id=$row['id'];
                $name=$row['name'];
                $phone=$row['phone'];
                $datetime=$row['datetime'];
                $status=$row['status'];

                echo "<form action='views/questionsRedirect.php' method='POST'>
                        <tr>
                            <td style='width: 10%'>$id</td>
                            <td style='width: 30%'> $name </td>
                            <td style='width: 20%'>  $phone </td>
                            <td style='width: 20%'> $datetime </td>
                            <td style='width: 20%'> $status </td>
                        </tr>
                       </form>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>