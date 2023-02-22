<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel - users</title>
    <link href="adminpanel.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <header>
        <div class="headerItem logo">
            AdminPanel
        </div>
        <div class="headerItem">
            <a href="../">ВЫЙТИ</a>
        </div>
    </header>

</div>

    <nav>
        <a href="index.php" style="color: white; background-color: black;">
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
        <a href="callbacks.php">
            <div class="navItem">звонки</div>
        </a>
    </nav>

<div class="container">

    <div class="tableForm">
        <table>
            <tr>
                <td style="width: 10%">id*</td>
                <td style="width: 30%">ФИО</td>
                <td style="width: 25%">Телефон</td>
                <td style="width: 15%">Пароль</td>
                <td style="width: 10%">Дата*</td>
                <td style="width: 10%; text-align: center"> Действия</td>
            </tr>
        </table>

        <table>
            <?php
            include_once('../connect.php');

            $table=mysqli_query($connect, "SELECT * FROM `users`");
            while($row=mysqli_fetch_array($table)){
                $id=$row['id'];
                $FIO=$row['FIO'];
                $telephone=$row['telephone'];
                $password=$row['password'];
                $date=$row['date'];

                echo "<form action='views/usersRedirect.php' method='POST'>
                        <tr>
                            <td style='width: 10%'>$id</td>
                            <td style='width: 30%'> <input type='text' name='FIO' value='$FIO'> </td>
                            <td style='width: 25%'> <input type='text' name='telephone' value='$telephone'> </td>
                            <td style='width: 15%'> <input type='text' name='password' value='$password'> </td>
                            <td style='width: 10%'> $date </td>
                            <td style='width: 10%; text-align: center'>
                             <button class='tableBtn' name='btnUserUpdate' type='submit' value='$id'> <img src='img/change.svg' alt='update' style='width: 25px; padding-right: 10px'> </button>
                             <button class='tableBtn' name='btnUserDelete' type='submit' value='$id'> <img src='img/delete.svg' alt='delete' style='width: 25px'>  </button>
                             </td>
                          </tr></form>";
            }
            ?>
        </table>

        <table>
            <form action='views/usersRedirect.php' method='POST'>
            <tr>
                <td style="width: 10%">Новый пользователь</td>
                <td style="width: 30%"> <input type='text' name='FIOAdd' placeholder="ФИО"></td>
                <td style="width: 25%"> <input type='text' name='telephoneAdd' placeholder="Телефон"></td>
                <td style="width: 15%"> <input type='text' name='passwordAdd' placeholder="Пароль"></td>
                <td style="width: 10%"> </td>
                <td style="width: 10%; text-align: center">
                    <button class='tableBtn' name='btnUserAdd' type='submit'> <img src="img/plus.svg" alt="add" style="width: 25px"> </button>
                </td>
            </tr>
            </form>
        </table>
    </div>
</div>
</body>
</html>