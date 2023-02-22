<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminPanel - rates</title>
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
    <a href="index.php">
        <div class="navItem">пользователи</div>
    </a>
    <a href="rates.php" style="color: white; background-color: black;">
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
                <td style="width: 10%">Название</td>
                <td style="width: 40%">Описание</td>
                <td style="width: 15%">Тип КПП</td>
                <td style="width: 10%">Цена</td>
                <td style="width: 10%; text-align: center"> Действия</td>
            </tr>
        </table>

        <table>
            <?php
            include_once('../connect.php');

            $table=mysqli_query($connect, "SELECT * FROM `rates`");
            while($row=mysqli_fetch_array($table)){
                $id=$row['id'];
                $nameRate=$row['nameRate'];
                $descriptionRate=$row['descriptionRate'];
                $gearBox=$row['gearBox'];
                $priceRate=$row['priceRate'];

                echo "<form action='views/ratesRedirect.php' method='POST'>
                        <tr>
                            <td style='width: 10%'>$id</td>
                            <td style='width: 10%'> <input type='text' name='nameRate' value='$nameRate'> </td>
                            <td style='width: 40%'> <textarea name='descriptionRate'>$descriptionRate</textarea> </td>
                            <td style='width: 15%'> <input type='text' name='gearBox' value='$gearBox'> </td>
                            <td style='width: 10%'> <input type='number' name='priceRate' value='$priceRate'> </td>
                            <td style='width: 10%; text-align: center'>
                             <button class='tableBtn' name='btnRateUpdate' type='submit' value='$id'> <img src='img/change.svg' alt='update' style='width: 25px; padding-right: 10px'> </button>
                             <button class='tableBtn' name='btnRateDelete' type='submit' value='$id'> <img src='img/delete.svg' alt='delete' style='width: 25px'>  </button>
                             </td>
                          </tr></form>";
            }
            ?>
        </table>

        <table>
            <form action='views/ratesRedirect.php' method='POST'>
                <tr>
                    <td style="width: 10%">Новый тариф</td>
                    <td style="width: 10%"> <input type='text' name='nameRateAdd' placeholder="Название"></td>
                    <td style="width: 40%"> <textarea name='descriptionRateAdd' style="height: 20px">Описание</textarea></td>
                    <td style="width: 15%"> <input type='text' name='gearBoxAdd' placeholder="Тип КПП"></td>
                    <td style="width: 10%"> <input type='number' name='priceRateAdd' placeholder="Цена"></td>
                    <td style="width: 10%; text-align: center">
                        <button class='tableBtn' name='btnRateAdd' type='submit'> <img src="img/plus.svg" alt="add" style="width: 25px"> </button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>
</body>
</html>