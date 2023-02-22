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
    <a href="questions.php" style="color: white; background-color: black;">
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
                <td style="width: 15%">Пользователь</td>
                <td style="width: 10%">Телефон</td>
                <td style="width: 25%">Вопрос</td>
                <td style="width: 20%">Статус</td>
                <td style="width: 10%">Дата</td>
                <td style="width: 15%; text-align: center">Действия</td>
            </tr>
        </table>

        <table>
            <?php
            include_once('../connect.php');

                    $table=mysqli_query($connect, "SELECT * from `questions` where `id_user` IS NULL");
                    while($row=mysqli_fetch_array($table)){
                        $id=$row['id'];
                        $FIOuser=$row['FIOuser'];
                        $telephone=$row['telephone'];
                        $question=$row['question'];
                        $status=$row['status'];
                        $datetime=$row['datetime'];

                        echo "<form action='views/questionsRedirect.php' method='POST'>
                        <tr>
                            <td style='width: 5%'>$id</td>
                            <td style='width: 15%'> $FIOuser </td>
                            <td style='width: 10%'>  $telephone </td>
                            <td style='width: 25%'> $question </td>
                            <td style='width: 20%'> $status </td>
                            <td style='width: 10%'> $datetime </td>
                            <td style='width: 15%; text-align: center;'>";
                        if ($status === "Ожидает ответа") {

                            echo "<input type = 'text' name = 'answer' placeholder = 'Ответ:' ><br><br>
                             <button class='tableBtn' name = 'btnQuestionAnswer' type = 'submit' value = '$id' > <img src = 'img/change.svg' alt = 'update' style = 'width: 25px; padding-right: 10px' > </button>";
                        }
                        echo "<button class='tableBtn' name='btnQuestionDelete' type='submit' value='$id'> <img src='img/delete.svg' alt='delete' style='width: 25px'>  </button>
                             </td>
                          </tr></form>";
                    }


            ?>
        </table>
    </div>
</div>
</body>
</html>